<!DOCTYPE html>
<html lang="en">

<?php include "components/head.php" ?>

<title>Profile settings</title>
<body>

<?php
include "components/header.php";
require "controllers/profileSettingsController.php";


?>

<main class="none-margin">

    <?php include "components/left-right-panels.php" ?>

    <!--Setting Content -->
    <div class="setting-header">
        <span>Make profile </span>
        <div class="dropping-texts">
            <div>Better</div>
            <div>Brighter</div>
            <div>Steeper</div>
        </div>
    </div>

    <div class="wrapper holder">
        <div class="setting-content" id="tabs">
            <div class="navigation-panel">
                <nav>
                    <ul>
                        <li class="active tab">Personal info</li>
                        <li class="tab">Hobbies and Interests</li>
                        <li class="tab">Education And Employement</li>
                        <li class="tab">Security Settings</li>
                    </ul>
                </nav>
            </div>
            <div class="right-box">
                <form action="#" method="POST">

                    <div class="tab-content">
                        <h2>Personal Info</h2>

                        <input type="text" placeholder="First name" name="name_textbox"><br>
                        <input type="text" placeholder="Second name" name="lastName_textbox"><br>
                        <input type="text" placeholder="Country and city" name="location_textbox"><br>

                        <input type="text" placeholder="Info about me" name = "info_textbox"><br>
                        <input type="text" placeholder="Your Birthday" id="datepickerSettings" name = "birthday_textbox"><br>
                        <select name="gender">
                            <option value="" disabled selected hidden>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select><br>

                        <select name="isMerried">
                            <option  value=""  disabled selected hidden>Status</option>
                            <option value="Married">Married</option>
                            <option value="No married">No married</option>
                        </select><br>
                        <input type="text" placeholder="Occupation" name ="occupation_textbox"><br>

                    </div>

                    <div class="tab-content">

                        <h2>Hobbies and Interests</h2>

                        <input type="text" placeholder="Hobbies" name="hobbies"><br>
                        <input type="text" placeholder="Favourite music bands/artists" name="music"><br>
                        <input type="text" placeholder="Favourite TV shows" name="shows"><br>

                        <input type="text" placeholder="Favourite movies" name="movies"><br>
                        <input type="text" placeholder="Favourite books" name="books"><br>
                        <input type="text" placeholder="Favourite writers" name="writers"><br>

                        <input type="text" placeholder="Favourite games" name="games"><br>
                        <input type="text" placeholder="Favourite cars" name="cars"><br>
                    </div>

                    <div class="tab-content">

                        <h2>Education And Employement</h2>

                        <input type="text" placeholder="School" name="school"><br>
                        <input type="text" placeholder="University" name="university"><br>
                        <input type="text" placeholder="Courses" name="courses"><br>

                        <input type="text" placeholder="College" name="college"><br>
                    </div>


                    <div class="tab-content">
                        <h2>Security Settings</h2>

                        <input type="password" placeholder="Old password"><br>
                        <input type="password" placeholder="New password"><br>
                        <input type="password" placeholder="Repeat new password"><br>

                        <input type="text" placeholder="Phone number"><br>
                        <input type="email" placeholder="New email"><br>


                    </div>

                    <input type="submit" value="Submit changes" name="submit_changes">

                </form>
            </div>
        </div>
    </div>
</main>


<script src="js/jquery/jquery-3.2.1.min.js"></script>
<script src="js/jquery/jquery-ui.js"></script>
<script src="js/datepicker.js"></script>
<script src="js/tabs.js"></script>
</body>
</html>