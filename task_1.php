<?php

$text = "The quick brown fox jumps over the lazy dog.";

function myText($text) {
    
    $text = strtolower($text); // Convert the string to all lowercase

    
    $text = str_replace("brown", "red", $text); // Replace "brown" with "red" in the string

    echo $text;
}



myText($text);
?>