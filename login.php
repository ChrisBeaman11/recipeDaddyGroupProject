<?php
require "includes/header.php";

// Page that logins in user to website

?>

<main>
    <title>RecipeDaddy - Login</title>

    <link rel="stylesheet" href="css/login.css">

    <div class="bg-cover">

        <!-- Code below creates the login form-->

        <div class="h-40 center-me">
            <div class="my-auto">
                <form class="form-signin" action="includes/login-helper.php" method="post">

                    <h2>Login</h1>
                        <p class="hint-text">Please Login!</p>

                        <div class="form-group">

                            <input type="text" class="form-control" name="uname-email" placeholder="Username/Email"
                                required="required">

                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" id="inputPassword" class="form-control" name="pwd"
                                placeholder="Password" required>

                            <button class="btn btn-lg btn-primary btn-block" name="login-submit" type="submit">Sign
                                in!</button>
                            <a href="signup.php" class="button">Don't have an account? Click to Sign up</a>
                            <p class="mt-5 mb-3 text-muted">&copy; 2020-9999</p>

                </form>

            </div>
        </div>

    </div>

</main>