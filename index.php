<?php
session_start();
include("./db.php");
include("./fetchData.php");
if (isset($_POST["add"])) {
    if (!empty($_POST["taskinp"])) {
        $_SESSION["success"] = "Task Added sucessfully !";
    } else {
        $_SESSION["error"] = "Task not added due to some issue";
    }
}


// fetchAllData from fetchData file in a variable 
$fetchtasks = getAllTasks($conn);
//Test if working or not
// print_r($fetchtasks);  --- done working
?>

<!DOCTYPE html>
<html>

<head>
    <title>Todo List using JavaScript</title>
    <link href="./styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body>
    <!--Step 1: Basic structure of Todo List-->
    <div class="container">
        <!--Step 2: Create input place and button-->
        <div id="newtask">
            <?php include('alert.php') ?>
            <h3>Todo List Example</h3>
            <form action="add.php" method="post">
                <input type="text" id="taskInput" name="taskinp" placeholder="Task to be done..." />
                <button id="add" type="submit" name="add">Add</button>
            </form>
        </div>
        <!--Step 3: Tasks-->
        <div id="tasks">
            <?php
            if (!empty($fetchtasks)) {
                foreach ($fetchtasks as $t) {
            ?>
                    <div class="task" style="justify-content: space-between;">
                        <span class="taskname">
                            <?php echo $t[1] ?>
                        </span>
                        <div class="btn">
                            <button class="delete">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                            <button class="edit">
                                <i class="fas fa-edit"></i>
                            </button>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</body>

</html>