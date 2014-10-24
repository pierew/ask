<?php
$DB_host = "";
$DB_port = ;
$DB_user = "";
$DB_password = "";
$DB_name = "";

function initDB() {
    connectDB($DB_host,DB_port,$DB_user,$DB_password,$DB_name);
    echo "Connection";
}
function connectDB($host,$port,$user,$password,$db) {
    $db_connection = @new mysqli($host, $user, $password, $db, $$port);
    if ($mysqli->connect_error) {
        die('Connect Error: ' . $mysqli->connect_error);
    }
}
