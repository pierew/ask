<?php
include_once './includes/classes/classes.php';
$arr = array();
array_push($arr,array("Test","1123"));
array_push($arr,array("Test2","2123"));
array_push($arr,array("Test3","3123"));
array_push($arr,array("Test4","4123"));
array_push($arr,array("Test5","5123"));
    
foreach($arr as $item) {
    echo "<p>";
    echo "Dein Benutzename: ". $item[0];echo "</p>";
    echo "<p>";
    echo "Dein Passwort:".$item[1];
    echo "</p>";
    echo "<p>Hinweis: Dieser Schl&uuml;ssel verf&auml;llt, nach dem durchf&uuml;hren der Umfrage, er kann jederzeit vom Administrator reaktiviert werden</p>";
    echo "<hr>";
}