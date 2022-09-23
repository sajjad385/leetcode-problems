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
