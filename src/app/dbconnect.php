<?php

$db_host = "localhost";
$db_name = "reddit";
$db_user = "user";
$db_pass = "QAZ123qaz";


$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
