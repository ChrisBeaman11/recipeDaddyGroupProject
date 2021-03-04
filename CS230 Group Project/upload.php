<?php
require 'includes/header.php';
require 'includes/dbhandler.php';
?>

<main>
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
                    <textarea name="uploader" id="uploader" cols="30" rows="2" placeholder="Give alias for recipe"
                        style="text-align: center;"></textarea>
                </div>
                    <textarea name="recname" id="recname" cols="30" rows="2" placeholder="Recipe name here"
                        style="text-align: center;"></textarea>
                </div>
                <div class="form-group">
                    <textarea name="ingredients"
                        id="List Ingrededients Here separated by semicolons" cols="30" rows="10"
                        placeholder="List Ingrededients Here separated by semicolons" style="text-align: center;"></textarea>
                </div>
                <div class="form-group">
                    <textarea name="steps" id="steps" cols="30" rows="10"
                        placeholder="List Recipe Steps Here separated by semicolons"
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