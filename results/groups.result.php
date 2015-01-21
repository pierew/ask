<?php
$groupResults = getResultOfGroup($_GET['gid']);
echo "Ergebnisse f&uuml;r Gruppe: ". getGroupName($_GET['gid'])." ";
for ($i = 0; $i < sizeof($groupResults); $i++) {
    echo $groupResults[$i]['answer'];
}
echo '<pre>';
print_r($groupResults);
echo '</pre>';