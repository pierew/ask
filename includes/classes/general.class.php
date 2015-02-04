<?php
/**
* Includes all Functions that not in special Groups
*
* Generelle Funktionen die nicht in Verbindung mit den Hauptklassen stehen.
*
* @author     Piere Woehl <woehlpiere@googlemail.com>
*/
function getShortcode($string) {
    $result = queryDB("SELECT text FROM ask_shortcodes WHERE name = '$string';");
    return $result['text'];
}

function generate_password() {
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$password = substr(str_shuffle($chars), 0, 5);
return $password;
}

function updateSystem($item,$value) {
    queryDB("UPDATE ask_shortcodes SET text='$value' WHERE name='$item';");
}