<?php
class lorumIpsum {

    public $modx;
    public $config = array();
    public $properties = array();
    public $output = '';
    public $error = '';
    public $debug = "\n";

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
        $words = $this -> modx -> getOption('words', $sp, 0);
        $chars = $this -> modx -> getOption('chars', $sp, 0);
        $paragraphs = $this -> modx -> getOption('paragraphs', $sp, 0);
        $debug = $this -> modx -> getOption('debug', $sp, 0);

        $this -> config = array_merge(array(
            'basePath' => $basePath,
            'corePath' => $basePath,
            'numWords' => $words,
            'numChars' => $chars,
            'numParagraphs' => $paragraphs,
        ), $sp);

        //$this -> modx -> addPackage('LorumIpsum', $this -> config['modelPath']);
    }

    function run(){
        if ($this->words != 0) {
            $this->words();
            return $this->output;
        }
    }

    private function getWords(){
        $sql = "SELECT word from modx_lorum_ipsum
                ORDER BY RAND()
                LIMIT 0, " . $this->config['numWords'];

        $i = -1;

        $results = $this->modx->query($sql);

        while ($r = $results->fetch(PDO::FETCH_ASSOC)) {
            array_push($this->words, $r['word']);
            $this->totalChars += strlen($r['word']);
        }

    }

    function words() {
        $this->getWords($this->config['numWords']);

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

    function chars($numChars) {
        $this->getWords($numChars);

    }

    function paragraphs($numParagraphs, $wordsInParagraph){
        $this->getWords($numParagraphs*$wordsInParagraph);

        for ($p = 0; $p < $numParagraphs; $p++){
            for ($w = 0; $w < $wordsInParagraph; true){
                if ($wordsInParagraph - $w > $this->maxWordsInParagraph) {

                }
            }
        }

    }

}