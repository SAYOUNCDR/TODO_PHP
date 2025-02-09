<?php
session_start();
include("./db.php");
include("./fetchData.php");
include("./delete.php");
if (isset($_POST["add"])) {
    if (!empty($_POST["taskinp"])) {
        $_SESSION["success"] = "Task Added sucessfully !";
    } else {
        $_SESSION["error"] = "Task not added due to some issue";
    }
}
// fetchAllData from fetchData file in a variable 
$fetchtasks = getAllTasks($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Todo List using JavaScript</title>
    <link href="./styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body>
    <div class="container">
        <div id="newtask">
            <?php include('alert.php') ?>
            <h3>Todo List Example</h3>
            <form action="add.php" method="post">
                <input type="text" id="taskInput" name="taskinp" placeholder="Task to be done..." />
                <button id="add" type="submit" name="add">Add</button>
            </form>
        </div>
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
                            <!-- delete_id stores the task's ID inside the button. -->
                            <a href="./index.php?delete_id=<?php echo $t[0] ?>" style="text-decoration: none;"><button class="delete">
                                    <i class=" fa-solid fa-trash"></i>
                                </button>
                            </a>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</body>

</html>