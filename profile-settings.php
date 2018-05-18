<!DOCTYPE html>
<html lang="en">

<?php include "components/head.php" ?>

<title>Profile settings</title>
<body>

<?php
include "components/header.php";
require "controllers/profileSettingsController.php";



?>

<main>

    <?php include "components/left-right-panels.php" ?>

    <!--Setting Content -->
    <div class="wrapper holder">
        <div class="setting-content">
            <form action="#" method="POST">

                <h2>Personal Info:</h2>
                <div class="grid-content">

                    <input type="text" placeholder="First name" name = "name_textbox">
                    <input type="text" placeholder="Second name" name = "lastName_textbox">
                    <input type="text" placeholder="Country and city" >

                    <input type="text" placeholder="Info about me">
                    <input type="text" placeholder="Birthday" name="birthday_textbox">
                    <select>
                        <option value="" disabled selected hidden>Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>

                    <select>
                        <option value="" disabled selected hidden>Status</option>
                        <option value="male">Married</option>
                        <option value="female">No married</option>
                    </select>
                    <input type="text" placeholder="Occupation">

                </div>

                <h2>Hobbies and Interests:</h2>
                <div class="grid-content">

                    <input type="text" placeholder="Hobbies">
                    <input type="text" placeholder="Favourite music bands/artists">
                    <input type="text" placeholder="Favourite TV shows">

                    <input type="text" placeholder="Favourite movies">
                    <input type="text" placeholder="Favourite books">
                    <input type="text" placeholder="Favourite writers">

                    <input type="text" placeholder="Favourite games">
                    <input type="text" placeholder="Favourite cars">
                </div>

                <h2>Education And Employement</h2>
                <div class="grid-content">

                    <input type="text" placeholder="School">
                    <input type="text" placeholder="University">
                    <input type="text" placeholder="Courses">

                    <input type="text" placeholder="Collage">
                </div>

                <h2>Security Settings:</h2>
                <div class="grid-content">

                    <input type="password" placeholder="Old password">
                    <input type="password" placeholder="New password">
                    <input type="password" placeholder="Repeat new password">

                    <input type="text" placeholder="Phone number">
                    <input type="email" placeholder="New email">

                </div>

                <input type="submit" value="Submit changes" name = "submit_changes">

            </form>
        </div>
    </div>
</main>
</body>
</html>