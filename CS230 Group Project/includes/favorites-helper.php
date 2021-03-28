<?php

    require_once 'dbhandler.php';
    

    if (isset($_GET['favorites-submit'])) {
        session_start();
        $userid = $_SESSION['uid'];
        $recipeid = $_GET['rid'];
        
        $sql = "INSERT INTO favorites (pid, rid) VALUES('$userid', '$recipeid')";
        mysqli_query($conn, $sql);
    }
    header("Location: ../review.php?id=$recipeid");
    exit();
?>