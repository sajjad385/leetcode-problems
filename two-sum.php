<?php

     class Solution {

        /**
         * @param Integer[] $nums
         * @param Integer $target
         * @return Integer[]
         */
        function twoSum($nums, $target) {
            $arr = [];
            for ($i = 0; $i < count($nums); $i++) {
                for ($j = 0; $j < count($nums); $j++) {
                    if ($i == $j) continue;
                    if ($nums[$i] + $nums[$j] == $target) {
                        $arr[] = $i;
                        $arr[] = $j;
                        return $arr;
                    }
                }
            }
            return $arr;
        }
    }



    /*sample 31 ms submission
    function twoSum($nums, $target) {
            $a = [];
            $size = count($nums);
            for ($i = 0; $i<$size; $i++) {
                $diff = $target - $nums[$i];
                if ( array_key_exists($diff, $a)) {
                    return [$a[$diff], $i];
                    break;
                }
                $a[$nums[$i]] = $i;
            }
        }
        
//        sample 17 ms submission 
        function twoSum($nums, $target) {
        $map = [];
        for($i=0; $i<count($nums); $i++) {
            $diff = $target - $nums[$i];
            if (array_key_exists($diff, $map)) {
                return [$map[$diff], $i];
            } else {
                $map[$nums[$i]] = $i;
            }
        }        
    }
    */
