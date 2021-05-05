<?php

require 'dbhandler.php';
session_start();


if (isset($_GET['recipe-submit'])) {

    $recname = $_GET['recname'];
    $ingredients = $_GET['ingredients'];
    $steps = $_GET['steps'];
    $uploader = $_SESSION['uname'];

        $sql = "INSERT INTO recipes (name, ingredients, steps, creator) VALUES ('$recname', '$ingredients', '$steps', '$uploader')";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../upload.php?error=(ò_óˇ)");
            exit();
        }
        
        else {
            mysqli_query($conn, $sql);
            header("Location: ../recipe-gallery.php?success=UploadWin");
            exit();
        }
    } 


        

header("Location: ../profile.php");
exit();


?>