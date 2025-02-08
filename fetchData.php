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




//Tests
// $t=getAllTasks($conn);
// print_r($t);

// ------------------------------------
// $tasks=getAllTasks($conn);
// foreach($tasks as $t){
    //mysqli_fetch_row returns a numerically indexed array,
    //not an associative array. That means need to use numeric indexes 
    //($t[0], $t[1], etc.) instead of col names ($t['id'], $t['task']).
//     echo $t[0] ."  ".$t[1]."  ".$t[2]. "<br>";
// }
?>