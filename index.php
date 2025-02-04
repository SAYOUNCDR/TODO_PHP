<?php
include "./db.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Todo List using JavaScript</title>
    <link href="./styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <style>
        /*Step 1: CSS*/
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            background: #012d42;
        }

        .container {
            width: 40%;
            top: 50%;
            left: 50%;
            background: white;
            border-radius: 10px;
            min-width: 450px;
            position: absolute;
            min-height: 100px;
            transform: translate(-50%, -50%);
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        /*Step 2: CSS*/
        #newtask {
            position: relative;
            padding: 30px 20px;
        }

        #newtask h3 {
            margin-bottom: 20px;
        }

        #newtask input {
            width: 75%;
            height: 45px;
            padding: 12px;
            color: #111111;
            font-weight: 500;
            position: relative;
            border-radius: 5px;
            font-size: 15px;
            border: 2px solid #d1d3d4;
        }

        #newtask input:focus {
            outline: none;
            border-color: #0d75ec;
        }

        #newtask button {
            position: relative;
            float: right;
            font-weight: 500;
            font-size: 16px;
            background-color: #0d75ec;
            border: none;
            color: #ffffff;
            cursor: pointer;
            outline: none;
            width: 20%;
            height: 45px;
            border-radius: 5px;
        }

        /*Step 3: CSS*/
        #tasks {
            border-radius: 10px;
            width: 100%;
            position: relative;
            background-color: #ffffff;
            padding: 30px 20px;
            margin-top: 10px;
        }

        .task {
            border-radius: 5px;
            align-items: center;
            justify-content: flex start;
            gap: 5px;
            border: 1px solid #939697;
            cursor: pointer;
            background-color: #dadbdf;
            height: 50px;
            margin-bottom: 8px;
            padding: 5px 10px;
            display: flex;
        }

        .task span {
            font-size: 15px;
            font-weight: 400;
        }

        .delete {
            background-color: #db2525;
            color: #ffffff;
            border: none;
            cursor: pointer;
            outline: none;
            height: 100%;
            width: 40px;
            border-radius: 5px;
        }

        .edit {
            background-color: #0d75ec;
            color: #ffffff;
            border: none;
            cursor: pointer;
            outline: none;
            height: 100%;
            width: 40px;
            border-radius: 5px;
        }
        .btn {
            height: 100%;
            margin-left: 160px;
        }
    </style>
</head>

<body>
    <!--Step 1: Basic structure of Todo List-->
    <div class="container">
        <!--Step 2: Create input place and button-->
        <div id="newtask">
            <h3>Todo List Example</h3>
            <form action="add.php" method="post">
                <input type="text" id="taskInput" name="taskinp" placeholder="Task to be done..." />
                <button id="add" type="submit" name="add">Add</button>
            </form>
        </div>
        <!--Step 3: Tasks-->
        <div id="tasks">
            <div class="task">
                <span class="taskname">
                    Todo list PHP Project
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
        </div>
    </div>

</body>

</html>