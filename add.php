<?php
include "./db.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $task = $_POST["taskinp"];
    $sql = "INSERT INTO tasks (task) VALUES ('$task')";

    mysqli_query($conn,$sql);
}

?>