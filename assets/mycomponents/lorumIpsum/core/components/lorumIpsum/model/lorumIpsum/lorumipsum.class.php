<?php
class lorumIpsum {

    public $modx;
    public $config = array();
    public $properties = array();
    public $output = '';
    public $error = '';
    public $debug = false;

    private $words = array();
    private $totalChars = 0;
    private $minWordsInParagraph = 5;
    private $maxWordsInParagraph = 20;

    /**
     * Purpose: The automatic setup and configurations for the package on load
     *
     * @param modX $modx
     * @param array $config
     */
    function __construct(modX &$modx, array $sp = array()) {
        $this -> modx = &$modx;

        $basePath = $this -> modx -> getOption('lorumIpsum.core_path', $sp, $this -> modx -> getOption('core_path') . 'components/lorumIpsum/');
        $numWords = $this -> modx -> getOption('words', $sp, 0);
        $chars = $this -> modx -> getOption('chars', $sp, 0);
        $paragraphs = $this -> modx -> getOption('paragraphs', $sp, 0);
        $separator = $this -> modx -> getOption('seperator', $sp, '<br />');
        $debug = $this -> modx -> getOption('debug', $sp, 0);

        $this -> config = array_merge(array(
            'basePath' => $basePath,
            'corePath' => $basePath,
            'numWords' => $numWords,
            'numChars' => $chars,
            'numParagraphs' => $paragraphs,
            'separator' => $separator,
        ), $sp);

        //$this -> modx -> addPackage('LorumIpsum', $this -> config['modelPath']);
    }

    function run(){

        if ($this->config['numParagraphs'] != 0) {
            $this->returnParagraphs();
            return $this->output;
        }

        if ($this->config['numWords'] != 0) {
            $this->returnWords();
            return $this->output;
        }
    }

    /***
     * Fetches words from the database
     */
    private function fetchWords($words = 0){

        if ($words == 0) {
            $words = $this->config['numWords'];
        }

        $sql = "SELECT word from modx_lorum_ipsum
                ORDER BY RAND()
                LIMIT 0, $words;";

        $i = -1;

        $results = $this->modx->query($sql);

        while ($r = $results->fetch(PDO::FETCH_ASSOC)) {
            array_push($this->words, $r['word']);
            $this->totalChars += strlen($r['word']);
        }

    }

    /***
     * Returns the number of words specified in this->config['numWords]'
     */
    function returnWords() {
        $this->fetchWords($this->config['numWords']);

        $wordCount = 0;

        while ($wordCount < $this->config['numWords']) {
            $sentence = '';
            $sentenceLength = rand($this->minWordsInParagraph, $this->maxWordsInParagraph);

            //Make sure we don't go over the number of words left
            if ($sentenceLength >($this->config['numWords'] - $wordCount)){
                $sentenceLength = $this->config['numWords'] - $wordCount;
            }

            //Capitalize the first word
            $sentence .= strtoupper(substr($this->words[$wordCount], 0 ,1)
                . substr($this->words[$wordCount], 1,strlen($this->words[$wordCount] - 1)));

            //Calculate where we need to stop
            $stopPos = $wordCount + $sentenceLength;

            $wordCount++;

            //Add the rest of the words
            while ($wordCount < $stopPos ) {
                $sentence .= $this->words[$wordCount];
                if ($wordCount != $stopPos - 1 ) {
                    $sentence .= ' ';
                } else{
                    $sentence .= '. ';
                }
                $wordCount++;
            }

            $this->output .= $sentence;
        }

    }

    function returnCharacters($numChars) {
        $this->fetchWords();

    }

    /***
     * Returns the number of paragraphs specified in this->config['numParagraphs]'
     */
    function returnParagraphs(){
        for ($p = 0; $p < $this->config['numParagraphs']; $p++){
            $this->words = array();
            $this->returnWords();
            $this->output .= $this->config['separator'];
        }
    }

}