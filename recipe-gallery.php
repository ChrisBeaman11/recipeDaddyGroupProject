<?php
require 'includes/header.php';
?>

<main>

    <title>RecipeDaddy - Recipes</title>
    <link rel="stylesheet" href="css/gallery.css">

    <div class="about">
        <h1 style="font-size: 48px">Recipe Daddy - About Us</h1>
        <p style="font-size: 18px">Here are the uploaded recipes!</p>

    </div>


    <div class="gallery-container">
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

    <div class="footer">
    <footer>Copyright RecipeDaddy</footer>

    </div>

</main>