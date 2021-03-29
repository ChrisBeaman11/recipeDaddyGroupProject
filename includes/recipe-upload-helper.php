<?php

require 'dbhandler.php';
session_start();


if (isset($_GET['recipe-submit'])) {

    $recname = $_GET['recname'];
    $ingredients = $_GET['ingredients'];
    $steps = $_GET['steps'];
    $uploader = $_SESSION['uname'];

        $sql = "INSERT INTO recipes (name, ingredients, steps, creator) VALUES ('$recname', '$ingredients', '$steps', '$uploader')";
        
        mysqli_query($conn, $sql);
        header("Location: ../about.php?success=UploadWin");
        exit();
    } 


        

header("Location: ../profile.php");
exit();


?>