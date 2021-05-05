<?php
    require_once 'dbhandler.php';

    if (isset($_GET['cart-submit'])) {
        session_start();
        $userid = $_SESSION['uid'];
        $recipeid = $_GET['rid'];
        
        $sql1 = "SELECT * FROM cart WHERE pid = '$userid' AND rid = '$recipeid';";
        $query = mysqli_query($conn, $sql1);
        $row = mysqli_fetch_array($query);

        if ($row['scid'] == NULL){
            $sql = "INSERT INTO cart (pid, rid) VALUES('$userid', '$recipeid');";
            mysqli_query($conn, $sql);
        }
    }

    header("Location: ../review.php?id=$recipeid");
    exit();
?>