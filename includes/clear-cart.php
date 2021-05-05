<?php
    require_once 'dbhandler.php';

    if (isset($_GET['clear-submit'])) {
        session_start();
        $userid = $_SESSION['uid'];
        $recipeid = $_GET['rid'];
        $sqli = "DELETE FROM cart WHERE pid = '$userid';";
        $query = mysqli_query($conn, $sqli);
    }

    header("Location: ../cart.php?id=$recipeid");
    exit();
?>