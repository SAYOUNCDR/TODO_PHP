<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "todo_db";

$conn = "";
$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

