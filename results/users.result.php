<?php
$userResults = getResultOfUser($_GET['username']);
echo "Ergebnisse f&uuml;r Benutzer: ".$_GET['username']." ";
for ($i = 0; $i < sizeof($userResults); $i++) {
    echo $userResults[$i]['answer'];
}
echo '<pre>';
print_r($userResults);
echo '</pre>';