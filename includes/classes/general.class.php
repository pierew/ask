<?php
/**
* Includes all Functions that not in special Groups
*
* 
*
* @author     Piere Woehl <woehlpiere@googlemail.com>
*/
function getMean($resultArray) {
    
}

function getDeviation($resultArray) {
    
}

function cleanSting($string) {
    
}

function getShortcode($string) {
    // $string = cleanSting($string);
    $result = queryDB("SELECT text FROM ask_shortcodes WHERE name = '$string';");
    return $result['text'];
}

function generate_password( $length = 8 ) {
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
$password = substr( str_shuffle( $chars ), 0, $length );
return $password;
}