<?php
require 'includes/header.php';
session_start();
?>

<main>

    <title>RecipeDaddy - Shopping Cart</title>
    <link rel="stylesheet" href="css/gallery.css">

<div class="about" >
    <h1 style= "font-size: 48px" >Recipe Daddy - Shopping Cart</h1>
    <p>Ingredients to purchase are shown here!</p>

</div>

    <div class = "gallery-container">
        <?php
            include_once 'includes/dbhandler.php';
            $userid = $_SESSION['uid'];
            //echo $userid;
            $sql = 'SELECT * FROM favorites WHERE pid='.$userid.'';
            //echo $sql;
            $query = mysqli_query($conn, $sql);
            //echo $query;
            //$row = mysqli_fetch_array($query);
            while($row = mysqli_fetch_assoc($query)) {
                //echo $userid;
                $sql1 = 'SELECT * FROM recipes where rid='.$row['rid'].'';
                $query1 = mysqli_query($conn, $sql1);
                $row1 = mysqli_fetch_assoc($query1);
                echo '<div class = "card">
                
                    <p>'.$row1["ingredients"].'</p>
                
                
                </div>';

            }
        ?>
    </div>
    
    <div class="footer">
        <footer> &#169 Copyright RecipeDaddy </footer>

    </div>
</main>
