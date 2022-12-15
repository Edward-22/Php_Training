<?php

class Palindrome {
    public static function isPalindrome($WordStr) {
        $WordStr = str_replace(' ', '', strtolower($WordStr));
        $TempStr = strrev($WordStr);
        $TempStr = preg_replace('/[^A-Za-z0-9\-]', '',$TempStr);
        if ($TempStr == $WordStr) {
            return true;
        } else {
            return false;
        }
    }
}
if (Palindrome::isPalindrome("race Car")) {
    echo "IS a Palindrome!";
} else {
    echo "NOT a forking palindrome mate.";
}