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
                        <input type="text" placeholder="Country and city"><br>

                        <input type="text" placeholder="Info about me"><br>
                        <input type="text" placeholder="Your Birthday" id="datepickerSettings" name = "birthday"><br>
                        <select>
                            <option value="" disabled selected hidden>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select><br>

                        <select>
                            <option value="" disabled selected hidden>Status</option>
                            <option value="male">Married</option>
                            <option value="female">No married</option>
                        </select><br>
                        <input type="text" placeholder="Occupation"><br>

                    </div>

                    <div class="tab-content">

                        <h2>Hobbies and Interests</h2>

                        <input type="text" placeholder="Hobbies"><br>
                        <input type="text" placeholder="Favourite music bands/artists"><br>
                        <input type="text" placeholder="Favourite TV shows"><br>

                        <input type="text" placeholder="Favourite movies"><br>
                        <input type="text" placeholder="Favourite books"><br>
                        <input type="text" placeholder="Favourite writers"><br>

                        <input type="text" placeholder="Favourite games"><br>
                        <input type="text" placeholder="Favourite cars"><br>
                    </div>

                    <div class="tab-content">

                        <h2>Education And Employement</h2>

                        <input type="text" placeholder="School"><br>
                        <input type="text" placeholder="University"><br>
                        <input type="text" placeholder="Courses"><br>

                        <input type="text" placeholder="Collage"><br>
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