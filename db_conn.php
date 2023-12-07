<?php

// Connection variables
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "sulat";

// Create connection
$db_conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
}

?>