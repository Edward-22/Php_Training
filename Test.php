<?php
class Palindrome {
    public static function isPalindrome($WordStr) {
        $WordStr = str_replace(' ', '', strtolower($WordStr));
        $TempStr = strrev($WordStr);
        $WordStr = preg_replace('/[^A-Za-z0-9\-]/', '', $WordStr);
        $TempStr = preg_replace('/[^A-Za-z0-9\-]/', '', $TempStr);
        if ($TempStr == $WordStr) {
            return true;
        } else {
            return false;
        }
    }
}
if (Palindrome::isPalindrome("Don't nod!")) {
    echo "Palindrome!";
} else {
    echo "Not a forking palindrome mate.";
}