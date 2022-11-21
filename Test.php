<?php

class Palindrome {
    public static function isPalindrome($WordStr) {
        $WordStr = str_replace(' ', '', strtolower($WordStr));
        $TempStr = strrev($WordStr);
        if ($TempStr == $WordStr) {
            return true;
        } else {
            return false;
        }
    }
}

if (Palindrome::isPalindrome("race Car")) {
    echo "Is a Palindrome";
} else {
    echo "Not a forking palindrome m8!";
}