<?php
require "controllers/signUpController.php";
require "controllers/signInController.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="css/sign-in-style.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/themify-icons/demo-files/demo.css">
    <link rel="stylesheet" type="text/css" href="css/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/modal-windows.css">

    <script src="js/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="js/jquery/jquery-ui.js" type="text/javascript"></script>
    <script src="js/datepicker.js" type="text/javascript"></script>
    <script src="js/change-forms.js" type="text/javascript"></script>
    <script src="js/active-class.js" type="text/javascript"></script>

    <title>Sign in</title>
</head>
<body>
<main class="sign-in">
    <div class="wrapper holder">
        <div class="left-block">
            <h2>Welcome to the social network<br>"AvtoNet"</h2>
            <p>We're the best social network for car's owners and not only for them. Chat. Enjoy. Friends. Family. Good
                luck and Have fun, Dedulya!</p>
            <button>View more information</button>
        </div>
        <div class="right-block">
            <div class="change-form">
                <div class="change-buttons holder">
                    <span id="firstForm" class="active-class">Log in</span>
                    <span id="secondForm">Sign up</span>
                </div>
                <div class="first-form holder">
                    <h3>Log in</h3>
                    <form action="#" method="POST">
                        <input type="email" placeholder="Your Email" name = "emailIn"><br>
                        <input type="password" placeholder="Your Password" name = "passwordIn"><br>
                        <input type="checkbox">
                        <span>Remember me</span><br>
                        <input type="submit" value="Log In"  name="do_login">
                    </form>
                </div>
                <div class="second-form holder">
                    <h3>Sign up</h3>
                    <form action="#" method="POST">
                        <input type="text" placeholder="Name" class="short-input" name = "name">
                        <input type="text" placeholder="Last Name" class="short-input" name = "lastName"><br>
                        <input type="email" placeholder="Your Email" name = "email"><br>
                        <input type="password" placeholder="Your Password" name = "password"><br>
                        <input type="password" placeholder="Repeat Your Password" name = "rePassword"><br>
                        <input type="text" placeholder="Your Birthday" id="datepicker" name = "birthday"><br>
                        <select name = "gender">
                            <option value="" disabled selected hidden>Your Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select><br>
                        <input type="checkbox" name = "termsCheckBox">
                        <span>I accept <a href="#" class="terms-clicker">Terms and Conditions</a> of the website</span><br>
                        <input type="submit" value="Compete Registration" name = "do_signup">
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include "components/modal-windows/terms-conditions-modal.php"
?>

<script src="js/modal-windows.js"></script>
</body>
</html>