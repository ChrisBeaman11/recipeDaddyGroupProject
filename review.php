<?php 
require 'includes/dbhandler.php';
require 'includes/header.php'; 
require 'includes/review-helper.php';
?>

<main>
        <link rel="stylesheet" href="css/review.css">
        
        <span id="testAvg"></span>

        <div class="container" align='center' style='max-width: 800 px;'>
            <div class="my-auto">


                <form id="favorites-button" action="includes/favorites-helper.php" method="get">

                    <input type="hidden" name="rid" id="rid" value=<?php echo $_GET['id'];?>></input>
                    <div class="form-group">
                        <button class="btn btn-outline-info" type="submit" name="favorites-submit" id="favorites-submit"
                            style="width: 500px">Favorite/Unfavorite</button>
                    </div>

                </form>
                <form id="shoppingcart-button" action="includes/cart-helper.php" method="get">

                    <input type="hidden" name="rid" id="rid" value=<?php echo $_GET['id'];?>></input>
                    <div class="form-group">
                        <button class="btn btn-outline-success" type="submit" name="cart-submit" id="cart-submit"
                            style="width: 500px">Add to Cart</button>
                    </div>

                </form>
               
                <?php
                $id = $_GET['id'];
                $sql = 'SELECT * FROM recipes WHERE rid='.$id.'';
                $query = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($query);
                echo '<div class = "card">
                    <img src="gallery/'.$row["pic"].'">
                    <h3>'.$row["name"].'</h3>
                    <p>Ingredients: '.$row["ingredients"].'</p>
                    <p>Directions: '.$row["steps"].'</p>
                </a>
                </div>';
                echo '<title>RecipeDaddy - '.$row["name"].'</title>';
                ?>

                <div class="container" " style=" max-width: 800px;">

                    <div class="my-auto">

                        <form id="review-form" style="padding: 30px;" action="includes/review-helper.php" method="post">


                            <em class="fa fa-star fa-2x star-rev" data-index="1"></em>
                            <em class="fa fa-star fa-2x star-rev" data-index="2"></em>
                            <em class="fa fa-star fa-2x star-rev" data-index="3"></em>
                            <em class="fa fa-star fa-2x star-rev" data-index="4"></em>
                            <em class="fa fa-star fa-2x star-rev" data-index="5"></em>


                    </div>
                    <div class="form-group" style="margin-top: 15px;">
                        <label class="title-label" for="review-title"
                            style="font-size:16px; font-weight: bold;">Title</label>
                        <input type="text" name="review-title" id="review-title"
                            style="width: 100%; margin-bottom: 10px;">
                        <textarea name="review" id="review-text" style="width: 100%;"
                            placeholder="Enter a comment..."></textarea>

                        <input type="hidden" name="rating" id="rating">
                        <input type="hidden" name="item_id" value="<?php echo $_GET['id'];?>">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-outline-danger" type="submit" name="review-submit" id="review-submit"
                            style="width: 100%">Review</button>

                        </form>

                    </div>


                </div>
        
    
    <span id="review_list"></span>
</main>

<script type="text/javascript">
var rateIndex = -1;
var id = <?php echo $_GET['id'];?>;


$(document).ready(function() {
    reset_star();

    // get reviews
    xhr_getter('display-reviews.php?id=', "review_list");
    //avg();
    xhr_getter('includes/get-ratings.php?id=', "testAvg");

    if (localStorage.getItem('rating') != null) {
        setStars(parseInt(localStorage.getItem('rating')));
    }
    $('.star-rev').on('click', function() {
        rateIndex = parseInt($(this).data('index'));
        localStorage.setItem('rating', rateIndex);
    });
    $('.star-rev').mouseover(function() {
        reset_star();
        var currIndex = parseInt($(this).data('index'));
        setStars(currIndex);

    });
    $('.star-rev').mouseleave(function() {
        reset_star();

        if (rateIndex != -1) {
            setStars(rateIndex);
        }
    });

    function setStars(max) {
        for (var i = 0; i < max; i++) {
            $('.star-rev:eq(' + i + ')').css('color', 'goldenrod');
        }
        document.getElementById('rating').value = parseInt(localStorage.getItem('rating'));
        console.log(id);
    }

    function reset_star() {
        $('.star-rev').css('color', 'grey');
    }

    //Used to interchangeably send GET requests for review display data. 
    function xhr_getter(prefix, element) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            // If the GET request was successful, fill in the span element with the review_list id with reviews
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById(element).innerHTML = this.responseText;
            }
        };
        url = prefix + id;
        xhttp.open("GET", url, true);
        xhttp.send();
        Rating: 5
    }
});
</script>