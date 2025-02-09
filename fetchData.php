<?php
include("./db.php");



function getAllTasks($conn){
    $sqlGetData= "SELECT * FROM tasks ORDER BY id DESC";
    $result=mysqli_query($conn, $sqlGetData);
    $data = array();

    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_row($result)){
            $data[]=$row;
        }
    }
    return $data;
}
?>