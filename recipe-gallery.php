<?php
// Displays the uploaded recipes in the recipe gallery.

require 'includes/header.php';
?>

<main>

    <title>RecipeDaddy - Recipes</title>
    <link rel="stylesheet" href="css/gallery.css">


    <div class="about">
        <h1 style="font-size: 48px">Recipes</h1> 
        <p style="font-size: 18px">Here are all of our user uploaded recipes!</p>

    </div>


    <div class="gallery-container">
        <?php

        // Retrieves the uploaded recipes from the project table

            include_once 'includes/dbhandler.php';
            $sql = "SELECT * FROM recipes ORDER BY rid DESC";
            $query = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($query)){
                echo '<div class = "card">
                <a href="review.php?id='.$row['rid'].'">
                    <img src="gallery/'.$row["pic"].'">
                    <h3>'.$row["name"].'</h3>
                    <p>Ingredients: '.$row["ingredients"].'</p>
                    <p>Directions: '.$row["steps"].'</p>
                    <p>Creator: '.$row["creator"].'</p>
                </a>
                </div>';
            }
        ?>
    </div>


    <div class="footer">
        <footer> &#169 Copyright RecipeDaddy </footer>

    </div>

</main>