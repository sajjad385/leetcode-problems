<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function buildArray($nums) {
        $permutation = [];
        for($i = 0; $i<count($nums); $i++) {
            $permutation[] = $nums[$nums[$i]];
        }
        return $permutation;
    }
}
