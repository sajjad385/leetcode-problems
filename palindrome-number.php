<?php


class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $givenNumber = $x;
        $reverseNumber = 0;
        while ($x >= 1) {
            $reminder = $x % 10;
            $reverseNumber = ($reverseNumber * 10) + $reminder;
            $x = ($x / 10);
        }
        return $reverseNumber === $givenNumber;
    }
}
