<?php

class Solution {

    /**
     * @param String[] $sentences
     * @return Integer
     */
    function mostWordsFound($sentences) {
        $maxWords = [];
        foreach ($sentences as $sentence) {
            $maxWords[] = str_word_count($sentence);
        }
        return max($maxWords);
    }
}
