<?php
require 'includes/header.php';
include_once 'includes/dbhandler.php';
?>

<link rel="stylesheet" href="css/gallery.css">
<title>RecipeDaddy - Search Results</title>
<link rel="stylesheet" href="css/gallery.css">

<div class="about">
    <h1 style="font-size: 48px">Recipe Daddy - Search Results</h1>
    <p style="font-size: 18px">Here are the uploaded recipes that you requested!</p>

</div>
<div class="gallery-container">
    <?php
        if (isset($_POST['search-submit'])) {
                session_start();
                $search = $_POST['search-text'];
                
                $sql = "SELECT * FROM recipes WHERE name LIKE '%$search%' ORDER BY rid DESC";
                mysqli_query($conn, $sql);
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
        } 
?>
</div>
<?php
exit();