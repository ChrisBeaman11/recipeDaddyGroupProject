<?php

// Upload.php is responsible for allowing the user to upload a recipe, with a title, ingredients, and steps

require 'includes/header.php';
require 'includes/dbhandler.php';
?>

<main>
<title>RecipeDaddy - Upload Recipe </title>
    <link rel="stylesheet" href="css/profile.css">

    <?php

if(isset($_SESSION['uid'])) {
    $rec_user = $_SESSION['uname'];
    $sqlpro = "SELECT * FROM profiles WHERE uname='$rec_user';";
    $res = mysqli_query($conn, $sqlpro);
    $row = mysqli_fetch_array($res);

    ?>

    <div class="h-50 center-me text-center">
        <div class="my-auto">

            <form class="form-signin" action="includes/recipe-upload-helper.php" method="get">
                <h2>Greetings <?php echo $rec_user?></h2>
                <div class="form-group">
                    <textarea name="recname" id="recname" cols="40" rows="2" placeholder="Recipe name here"
                        style="text-align: center;"></textarea>
                </div>
                <div class="form-group">
                    <textarea name="ingredients"
                        id="List Ingrededients Here" cols="40" rows="10"
                        placeholder="List Ingrededients Here" style="text-align: center;"></textarea>
                </div>
                <div class="form-group">
                    <textarea name="steps" id="steps" cols="40" rows="10"
                        placeholder="List Recipe Steps Here"
                        style="text-align: center;"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="recipe-submit"
                        class="btn btn-outline-primary btn-lg btn-block">Upload</button>

                </div>


            </form>

        </div>
    </div>

    <?php

} else {
    header("Location: /login.php?error=NotLoggedIn");
}
?>

</main>