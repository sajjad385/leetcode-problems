<?php

class Solution {

    /**
     * @param String[] $operations
     * @return Integer
     */
    function finalValueAfterOperations($operations) {
        $x = 0;
        for ($i = 0; $i < count($operations); $i++) {
            if ($operations[$i] == '--X' || $operations[$i] == 'X--') {
                $x = $x - 1;
            } else if ($operations[$i] == '++X' || $operations[$i] == 'X++') {
                $x = $x + 1;
            } else {
                continue;
            }
        }
        return $x;
    }
}
