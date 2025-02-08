<?php
session_start();
include "./db.php";

if (isset($_POST["add"])) {
    if (!empty($_POST["taskinp"])) {
        $task = $_POST["taskinp"];
        $sql = "INSERT INTO tasks (task) VALUES ('$task')";

        mysqli_query($conn, $sql);
        $_SESSION["success"] = "Task Added successfully!";
    } else {
        $_SESSION["error"] = "Task cannot be empty!";
    }
}

header("Location: index.php");
exit();
?>
