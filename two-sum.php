<?php

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    public function twoSum($nums, $target)
        {
            $arr = [];
            for ($i = 1; $i < count($nums); $i++) {
                if (($nums[$i] + $nums[$i - 1]) == $target) {
                    $arr[] = $i - 1;
                    $arr[] = $i;
                    break;
                }
            }
            return $arr;
        }

    twoSum([2,7,11,15], 9);


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
