<?php
include("./db.php");
if(isset($_GET['delete_id'])){
    $id=$_GET['delete_id'];
    $sql = "DELETE FROM tasks WHERE id=$id";
    mysqli_query($conn, $sql);
    header("LOCATION:./index.php");
}
?>