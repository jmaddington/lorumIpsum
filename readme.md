lorumIpsum Extra for MODx Revolution
=======================================

**Author:** JM Addington jm@jmaddington.com [JM Addington](http://www.jmaddington.com)

lorumIpsum is a lorum ipsum text generator for MODX. It can output the number of words, paragraphs or
characters specified. All words are chosen by random.

##Usage##
Call lorumIpsum with at least words set, and optionally paragraphs and characters.

The following would output 10 words:
`[[lorumIpsum? &words=&#x60;10&#x60;]]`

The following would output 3 paragraphs of 15 words:
`[[lorumIpsum? &words=&#x60;15&#x60; &paragraphs=&#x60;3&#x60;]]`

##Properties##

<table>
    <tr>
        <td>Name</td>
        <td>Description</td>
        <td>Default Value</td>
    </tr>

    <tr>
        <td>Words</td>
        <td>REQUIRED. The number of words to generate.</td>
        <td>30</td>
    </tr>

    <tr>
        <td>Paragraphs</td>
        <td>The number of paragraphs to generate, with the number of words specified in each paragraph.</td>
        <td>0</td>
    </tr>

    <tr>
        <td>Characters</td>
        <td>The maximum number of characters to output. Can only (and must be) used with the words property set.</td>
        <td>0</td>
    <tr>

    <tr>
        <td>Separator</td>
        <td>Separator to insert between paragraphs.</td>
        <td>&lt;br /&gt;</td>
    </tr>
</table>
