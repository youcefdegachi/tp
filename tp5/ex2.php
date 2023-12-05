<?php 
    function estPalindrome($mot){
        $ch=strrev($mot);
        if ($ch==$mot){
            echo $mot." est Palindrome <br>";
        }else{
            echo $mot." no Palindrome <br>";
        }
    }

    estPalindrome("radar");
    estPalindrome("bounjour");

?>