<?php
    function palindrome($text){
        $isPalindrome = false;
        if($text = strrev($text)) $isPalindrome = true;
        return $isPalindrome;
    }
?>