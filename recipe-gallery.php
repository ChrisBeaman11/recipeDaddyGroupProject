<?php
require 'includes/header.php';
?>

<main>
    <link rel="stylesheet" href="css/gallery.css">
    <h1>Recipes</h1>
    <div class = "gallery-container">
        <?php
            include_once 'includes/dbhandler.php';
            $sql = "SELECT * FROM recipes ORDER BY rid DESC";
            $query = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($query)){
                echo '<div class = "card">
                <a href="review.php?id='.$row['rid'].'">
                    <img src="gallery/'.$row["pic"].'">
                    <h3>'.$row["name"].'</h3>
                    <p>'.$row["ingredients"].'</p>
                    <p>'.$row["steps"].'</p>
                </a>
                </div>';
            }
        ?>
    </div>
    
</main>