<?php


class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $sum = 0;
        $splitStr = str_split($s);
        for ($i = 0; $i < count($splitStr); $i++) {
            if ($splitStr[$i] == 'I') {
                if (isset($splitStr[$i + 1]) && $splitStr[$i + 1] == 'V') {
                    $sum += 4;
                    $i++;
                    continue;
                } elseif (isset($splitStr[$i + 1]) &&  $splitStr[$i + 1] == 'X') {
                    $sum += 9;
                    $i++;
                    continue;
                } else {
                    $sum += 1;
                }
            }
            if ($splitStr[$i] == 'V') {
                $sum += 5;
            }
            if ($splitStr[$i] == 'X') {
                if (isset($splitStr[$i + 1]) && $splitStr[$i + 1] == 'L') {
                    $sum += 40;
                    $i++;
                    continue;
                } elseif (isset($splitStr[$i + 1]) && $splitStr[$i + 1] == 'C') {
                    $sum += 90;
                    $i++;
                    continue;
                } else {
                    $sum += 10;
                }
            }
            if ($splitStr[$i] == 'L') {
                $sum += 50;
            }
            if ($splitStr[$i] == 'C') {
                if (isset($splitStr[$i + 1]) && $splitStr[$i + 1] == 'D') {
                    $sum += 400;
                    $i++;
                    continue;
                } elseif (isset($splitStr[$i + 1]) && $splitStr[$i + 1] == 'M') {
                    $sum += 900;
                    $i++;
                    continue;
                }
                $sum += 100;
            }
            if ($splitStr[$i] == 'D') {
                $sum += 500;
            }
            if ($splitStr[$i] == 'M') {
                $sum += 1000;
            }
        }
        return $sum;
    }
}
