<?php

$DB_host = "0.0.0.0";
$DB_port = '3306';
$DB_user = "pierew";
$DB_password = "";
$DB_name = "c9";
$db_connection;

function initDB() {
    global $DB_host,$DB_port,$DB_user,$DB_password,$DB_name,$db_connection;
    connectDB($DB_host,$DB_port,$DB_user,$DB_password,$DB_name);
    
}
function connectDB($host,$port,$user,$password,$db) {
    global $db_connection;
    $db_connection = @new mysqli($host, $user, $password, $db, $port);
    if ($db_connection->connect_error) {
        die('Connect Error: ' . $db_connection->connect_error);
    }
}

function queryDB($SQL) {
    initDB();
    global $db_connection;
    $result = mysqli_fetch_assoc($db_connection->query($SQL, MYSQLI_USE_RESULT));
    return $result;
}
function queryDB_RAW($SQL) {
    initDB();
    global $db_connection;
    $result = $db_connection->query($SQL, MYSQLI_USE_RESULT);
    return $result;
}