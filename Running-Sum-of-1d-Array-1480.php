<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        
        for($i = 0; $i<count($nums)-1; $i++) {
            $temp = $nums[$i] + $nums[$i+1];
            $nums[$i+1] = $temp;
        }
        return $nums;
    }
}
