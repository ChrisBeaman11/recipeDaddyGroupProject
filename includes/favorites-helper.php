<?php

    require_once 'dbhandler.php';
    

    if (isset($_GET['favorites-submit'])) {
        session_start();
        $userid = $_SESSION['uid'];
        $recipeid = $_GET['rid'];
        
        $sql1 = "SELECT * FROM favorites WHERE pid = '$userid' AND rid = '$recipeid';";
        $query = mysqli_query($conn, $sql1);
        $row = mysqli_fetch_array($query);

        if ($row['favid'] == NULL){
            $sql = "INSERT INTO favorites (pid, rid) VALUES('$userid', '$recipeid');";
            mysqli_query($conn, $sql);
        }
    }
    header("Location: ../review.php?id=$recipeid");
    exit();
?>