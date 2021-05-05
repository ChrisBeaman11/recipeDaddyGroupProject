<?php
require 'includes/header.php';
session_start();
?>

<main>

    <link rel="stylesheet" href="css/gallery.css">

<div class="about" >
    <h1 style= "font-size: 48px" >Recipe Daddy - Favorites</h1>
    <p>Favorites are shown here!</p>

</div>

    <div class = "gallery-container">
        <?php
            include_once 'includes/dbhandler.php';
            $userid = $_SESSION['uid'];
            $sql = 'SELECT * FROM favorites WHERE pid='.$userid.'';
            $query = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($query)) {
                $sql1 = 'SELECT * FROM recipes where rid='.$row['rid'].'';
                $query1 = mysqli_query($conn, $sql1);
                $row1 = mysqli_fetch_assoc($query1);
                echo '<div class = "card">
                <a href="review.php?id='.$row1['rid'].'">
                    <img src="gallery/'.$row1["pic"].'">
                    <h3>'.$row1["name"].'</h3>
                    <p>Ingredients: '.$row1["ingredients"].'</p>
                    <p>Directions: '.$row1["steps"].'</p>
                    <p>Creator: '.$row["creator"].'</p>
                </a>
                </div>';

            }
        ?>

<title>RecipeDaddy - <?php echo $userid?>'s Profile </title>

    </div>
    
    <div class="footer">
        <footer> &#169 Copyright RecipeDaddy </footer>

    </div>
</main>