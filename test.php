<?php
include_once './includes/classes/classes.php';

$result = getQuestion();
$data = array();
while($row = mysqli_fetch_assoc($result)){
    array_push($data, $row);
}
print_r($data);
