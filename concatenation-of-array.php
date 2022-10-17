<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function getConcatenation($nums=[]) {
        $concatNumbers = [];
        for($i = 0; $i<count($nums); $i++) {
            $concatNumbers[] = $nums[$i];
        }
        return array_merge($nums, $concatNumbers);
    }
}
