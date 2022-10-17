<?php

class Solution {

    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts) {
        $wealth = [];
        foreach($accounts as $account){
            $wealth[] = array_sum($account);
        }
        return max($wealth);
    }
}
