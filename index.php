<?php require "components/head.php";
include "components/header.php";
?>

<!DOCTYPE html>
<html lang="en">


<title>Profile page</title>

<body>

<?php require "controllers/signInController.php";

require "controllers/avatarController.php";
require "controllers/backgroundController.php";
$user = R::load('users2', $_SESSION['logged_user']->id);
$hobbies = R::load('hobbies', $_SESSION['logged_user']->id_hobbies);
$education = R::load('education', $_SESSION['logged_user']->id_education);
if (!isset($_SESSION['logged_user'])) {
    ?>
    <script>
        document.location.href = "sign-in.php";
    </script>

    <?
}
?>


<main>

    <?php include "components/left-right-panels.php" ?>

    <div id="tabs">
        <!-- Now content !-->
        <div class="header-profile holder">
            <div class="bg-header-profile">
                <? echo '<img src = "data:image;base64,' . $user->background . '" '; ?>
            </div>
            <div class="flex-container">
                <div class="left-navigation holder">
                    <nav>
                        <ul>
                            <li class="active tab">Timeline</li>
                            <li class="tab">About</li>
                            <li class="tab">Friends</li>
                        </ul>
                    </nav>
                </div>
                <div class="profile-photo holder">
                    <? echo '<img src = "data:image;base64,' . $user->avatar . '" '; ?>
                </div>
            </div>

            <div class="open-settings">
                <form action="#" method="POST">

                    <input type="button" name="open_avatar" value="Open photo" class="open-avatar"><br>
                    <input type="button" name="change_avatar" value="Change photo" class="change-avatar"><br>
                    <input type="submit" name="delete_avatar" value="Delete photo"><br>

                </form>
            </div>

            <div class="open-settings-bg">
                <form action="#" method="POST">

                    <input type="button" name="change_bg_photo" value="Change background" class="change-bg"><br>
                    <input type="submit" name="delete_bg_photo" value="Delete background"><br>


                </form>

            </div>

            <div class="short-info">
                <span><? echo $user->name . " " . $user->lastName ?></span><br>

            </div>
            <div class="short-status">
                <span class="under-span"><? echo $user->status ?></span>
            </div>
            <div class="right-navigation holder">
                <nav>
                    <ul>
                        <li class="tab">Photos</li>
                        <li class="tab">Videos</li>
                        <li class="tab">Cars</li>
                    </ul>
                </nav>

                <!--    <div class="ti-more more-right events-call" title="Events with friend"></div>-->
                <!--
                                <div class="users-buttons">
                                    <form action="#" method="POST">

                                        <input type="submit" name="add_friend" value="Add friend"><br>
                                        <input type="submit" name="delete_friend" value="Delete friend"><br>
                                        <input type="submit" name="block_friend" value="Block"><br>
                                        <input type="submit" name="report" value="Report" class="call-report"><br>

                                    </form>
                                </div>-->
            </div>

        </div>
    </div>


    <!--Timeline content-->

    <div class="content tab-content show">
        <div class="wrapper holder">
            <div class="tiny-information holder">
                <h2>Profile info</h2>
                <div class="content-info">
                    <div class="about-me">
                        <h4>About me:</h4>
                        <p> <? echo $user->info ?></p>
                    </div>
                    <div class="favorite-cars">
                        <h4>Favorite Cars:</h4>
                        <p><? echo $hobbies->cars; ?></p>
                    </div>
                    <div class="favorite-music">
                        <h4>Favorite Music:</h4>
                        <p><? echo $hobbies->music; ?> </p>
                    </div>

                </div>
            </div>
            <div class="wall">
                <form action="#" method="POST">
                    <input type="text" placeholder="What's new?" class="input-clicker" id="myUrl">
                    <div class="input-footer">
                        <div class="icons">

                            <label id="addImgToPost" for="addImgTo"><i class="ti-camera"></i></label>
                            <input id="addImgTo" type="file">

                            <label id="addVideoToPost" for="addVideoTo"><i class="ti-video-clapper"></i></label>
                            <input id="addVideoTo" type="file">

                            <label id="addMusicToPost" for="addMusicTo"><i class="ti-music-alt"></i></label>
                            <input id="addMusicTo" type="file">

                        </div>
                        <input type="submit" value="Send" id="myBtn">
                    </div>
                </form>

                <div class="post">
                    <div class="post-header">
                        <div class="user-info">
                            <div class="round-user holder">
                                <? echo '<img src = "data:image;base64,' . $user->avatar . '"> '; ?>
                            </div>
                            <div>
                                <a href="#"><span><? echo $user->name . " " . $user->lastName ?></span></a>
                                <span class="under-span">shared</span><br>
                                <span class="time">7 hours ago</span>
                                <a href="javascript:void(0);" class="ti-more more-right call-post"></a>
                                <div class="post-event">
                                    <form action="#" method="POST">

                                        <input type="submit" name="delete_post" value="Delete post">

                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="post-body lightbox-gallery">
                        <p>Some post. </p>
                        <img src="img/cars/drift/ford-fiesta-ken-block-drift-2273.jpg" alt="Post image">
                        <div id="myCode"></div>
                        <audio controls>
                            <source src="audio/Mark%20Battles%20-%20The%20Truth.mp3" type="audio/mpeg">
                        </audio>
                    </div>
                    <div class="post-footer">
                        <div class="likes">
                            <i class="ti-heart"></i>
                            <span>15 person</span>
                        </div>
                        <div class="comments">
                            <i class="ti-comment-alt comment-clicker"></i>
                            <span>17</span>
                        </div>
                        <div class="share">
                            <i class="ti-location-arrow"></i>
                            <span>Share</span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="right-block">
                <div class="last-photo-block  lightbox-gallery">
                    <h2>Last Photo</h2>
                    <div class="portfolio">
                        <div class="image-border">
                            <a href="#">
                                <img src="img/cars/drift/ford-fiesta-ken-block-drift-2273.jpg" align="Some photo">
                            </a>
                        </div>
                        <div class="image-border">
                            <a href="#">
                                <img src="img/cars/drift/avtomobil-vyderzhka-drift.jpg"
                                     align="Some photo">
                            </a>
                        </div>
                        <div class="image-border">
                            <a href="">
                                <img src="img/cars/drift/game-nfs-need-for-speed.jpg"
                                     align="Some photo">
                            </a>
                        </div>
                        <div class="image-border">
                            <a href="#">
                                <img src="img/cars/drift/skyline-cars-avtomobili-drift.jpg">
                            </a>
                        </div>
                        <div class="image-border">
                            <a href="#">
                                <img src="img/cars/drift/drift-drifter-driftking-5513.jpg"
                                     align="Some photo">
                            </a>
                        </div>
                        <div class="image-border">
                            <a href="#">
                                <img src="img/cars/drift/bmw-m3-tandem-drift-drift-bmw-m3-dva-zanos-drift-asfalt-mash.jpg">
                            </a>
                        </div>
                        <div class="image-border">
                            <a href="#">
                                <img src="img/cars/amg-mercedes-benz-c-class-4094.jpg"
                                     align="Some photo">
                            </a>
                        </div>
                        <div class="image-border">
                            <a href="#">
                                <img src="img/cars/volkswagen-bug-volkswagen-kafer-volkswagen-beetle-zhuk-beetl.jpg"
                                     align="Some photo">
                            </a>
                        </div>
                        <div class="image-border">
                            <a href="#">
                                <img src="img/last%20photo/volvo-v60-polestar-performance-world-champion-edit-2017.jpg"
                                     align="Some photo">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="show-more" id="showMore">
            <i class="ti-more"></i>
        </div>
    </div>


    <!--End Timeline content-->

    <!--About content-->

    <div class="about-content tab-content">
        <div class="wrapper holder">

            <!--Left box-->

            <div class="left-box">
                <h2>Personal Info</h2>
                <div class="about-inside-content">
                    <div>
                        <h4>About me</h4>
                        <p><? echo $user->info ?></p>
                    </div>
                    <div>
                        <h4>Birthday</h4>
                        <p><? echo $user->birthday ?></p>
                    </div>
                    <div>
                        <h4>Birthplace</h4>
                        <p><? echo $user->location ?></p>
                    </div>
                    <div>
                        <h4>Occupation</h4>
                        <p><? echo $user->occupation ?> </p>
                    </div>
                    <div>
                        <h4>Gender</h4>
                        <p><? echo $user->gender; ?></p>
                    </div>
                    <div>
                        <h4>Status</h4>
                        <p><? echo $user->isMerried; ?></p>
                    </div>
                    <div>
                        <h4>Email</h4>
                        <p><? echo $user->email ?></p>
                    </div>
                    <div>
                        <h4>Phone Number</h4>
                        <p><? echo $user->number ?></p>
                    </div>
                </div>
            </div>

            <!--Right box-->

            <div class="right-above-box">
                <h2>Hobbies and Interests</h2>
                <div class="hobbies-content">
                    <div class="left-subbox">
                        <div>
                            <h4>Hobbies</h4>
                            <p>
                                <? echo $hobbies->hobbies; ?>
                            </p>
                        </div>
                        <div>
                            <h4>Favourite TV shows</h4>
                            <p><? echo $hobbies->shows; ?></p>
                        </div>
                        <div>
                            <h4>Favourite Movies</h4>
                            <p><? echo $hobbies->movies; ?></p>
                        </div>
                        <div>
                            <h4>Favourite Games</h4>
                            <p><? echo $hobbies->games; ?></p>
                        </div>
                    </div>
                    <div class="right-subbox">
                        <div>
                            <h4>Favourite Music Bands/ Artists</h4>
                            <p><? echo $hobbies->music; ?></p>
                        </div>
                        <div>
                            <h4>Favourite Books</h4>
                            <p><? echo $hobbies->books; ?>.</p>
                        </div>
                        <div>
                            <h4>Favourite Writers</h4>
                            <p><? echo $hobbies->writers; ?></p>
                        </div>
                        <div>
                            <h4>Favourite Cars</h4>
                            <p><? echo $hobbies->cars; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-below-box">
                <h2>Education and Employement</h2>
                <div class="education-content">
                    <div class="left-subbox">
                        <div>
                            <h4>School</h4>
                            <p><? echo $education->school; ?></p>
                        </div>
                        <div>
                            <h4>University</h4>
                            <p><? echo $education->education; ?></p>
                        </div>
                    </div>
                    <div class="right-subbox">
                        <div>
                            <h4>Courses</h4>
                            <p><? echo $education->courses; ?></p>
                        </div>
                        <div>
                            <h4>Collage</h4>
                            <p><? echo $education->college; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--End About Content-->

    <!--People Content-->

    <div class="people-content tab-content">
        <div class="wrapper holder">
            <div class="title-list">
                <?php
                $countFriends = 0; ?>
                <h2><? echo $user->name . "'s " ?>Friends </h2>
            </div>
            <div class="friends-content">
                <div class="grid-content">

                    <?php
                    $ids = [];
                    $s = 0;
                    while ($s < 100) {
                        $ids[$s] = $s;
                        $s++;
                    }
                    $friends = R::loadAll('friends', $ids);
                    foreach ($friends as $friend) {
                        if ($_SESSION['logged_user']->id == $friend->id_user && $friend->status == 1) {
                            $buddy = R::load('users2', $friend->id_friend);
                            $countFriends++;
                            ?>
                            <div class="friend-box">
                                <div class="avatar-box">
                                    <a href="visit.php?id=<? echo $buddy->id ?>"> <? echo '<img src = "data:image;base64,' . $buddy->avatar . '"> '; ?></a>
                                </div>
                                <h4><? echo $buddy->name . " " . $buddy->lastName; ?><br>
                                    <span>Kharkiv, Ukraine</span>
                                </h4>
                                <div class="buttons">
                                    <form action="#" method="POST">

                                        <!--<input type="submit" name="delete_friend_from_friends" value="Delete"
                                               class="delete-button">
                                        <input type="submit" name="add_friend_to_friends" value="Add" class="add-button">
                                        <input type="submit" name="block_friend" value="Block" class="block-button">-->

                                    </form>
                                </div>
                            </div>
                        <? }
                    } ?>

                </div>
            </div>
        </div>
    </div>
    <!--End People Content-->

    <!--Photos Content-->
    <div class="photos-content tab-content">
        <div class="wrapper holder">
            <div class="title-list">
                <h2><? echo $user->name . "'s " ?> Photos Gallery</h2>
            </div>
            <div class="grid-content lightbox-gallery">
                <div class="add-new-photo">
                    <button class="add-photo-button">+</button>
                    <h4>Add Photo<br>
                        <span>It only takes a minute!</span>
                    </h4>
                </div>
                <div class="photo-cart">
                    <img src="img/cars/amg-mercedes-benz-c-class-4094.jpg">
                </div>

                <div class="photo-cart">
                    <img src="img/cars/bmw-m4-f82-blue-sight.jpg">
                </div>

                <div class="photo-cart">
                    <img src="img/cars/ford-mustang-ford-mustang-3.jpg">
                </div>

                <div class="photo-cart">
                    <img src="img/cars/gaz-21-volga-tiuning-lenin.jpg">
                </div>

                <div class="photo-cart">
                    <img src="img/cars/volkswagen-bug-volkswagen-kafer-volkswagen-beetle-zhuk-beetl.jpg">
                </div>

                <div class="photo-cart">
                    <img src="img/cars/amg-mercedes-benz-c-class-4094.jpg">
                </div>
            </div>
        </div>
    </div>
    <!--End Photos Content-->

    <!--Video Content-->

    <div class="video-content tab-content">
        <div class="wrapper holder">
            <div class="title-list">
                <div class="flex-container">
                    <h2><? echo $user > name . "'s " ?> Videos</h2>
                    <button class="upload-video">Upload Video +</button>
                </div>
            </div>
            <div class="grid-content">
                <div class="video-box">
                    <div class="video-cart">
                        <img src="img/cars/drift/avtomobil-vyderzhka-drift.jpg">
                        <div class="hidden-button">
                            <a href="https://www.youtube.com/watch?v=CObPyy6UsL0" data-lity><i
                                        class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="video-info">
                        <span>Some information about video from YouTube</span>
                    </div>
                </div>

                <div class="video-box">
                    <div class="video-cart">
                        <img src="img/cars/drift/bmw-m3-tandem-drift-drift-bmw-m3-dva-zanos-drift-asfalt-mash.jpg">
                        <div class="hidden-button">
                            <a href="https://www.youtube.com/watch?v=CObPyy6UsL0" data-lity><i
                                        class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="video-info">
                        <span>Some information about video from YouTube</span>
                    </div>
                </div>

                <div class="video-box">
                    <div class="video-cart">
                        <img src="img/cars/drift/drift-drifter-driftking-5513.jpg">
                        <div class="hidden-button">
                            <a href="https://www.youtube.com/watch?v=CObPyy6UsL0" data-lity><i
                                        class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="video-info">
                        <span>Some information about video from YouTube</span>
                    </div>
                </div>

                <div class="video-box">
                    <div class="video-cart">
                        <img src="img/cars/drift/ford-fiesta-ken-block-drift-2273.jpg">
                        <div class="hidden-button">
                            <a href="https://www.youtube.com/watch?v=CObPyy6UsL0" data-lity><i
                                        class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="video-info">
                        <span>Some information about video from YouTube</span>
                    </div>
                </div>

                <div class="video-box">
                    <div class="video-cart">
                        <img src="img/cars/drift/game-nfs-need-for-speed.jpg">
                        <div class="hidden-button">
                            <a href="https://www.youtube.com/watch?v=CObPyy6UsL0" data-lity><i
                                        class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="video-info">
                        <span>Some information about video from YouTube</span>
                    </div>
                </div>

                <div class="video-box">
                    <div class="video-cart">
                        <img src="img/cars/drift/skyline-cars-avtomobili-drift.jpg">
                        <div class="hidden-button">
                            <a href="https://www.youtube.com/watch?v=CObPyy6UsL0" data-lity><i
                                        class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="video-info">
                        <span>Some information about video from YouTube</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Video Content-->

    <!--Cars Content-->

    <div class="cars-content tab-content">
        <div class="wrapper holder">
            <div class="title-list">
                <div class="flex-container">
                    <h2><? echo $user->name . "'s " ?> Cars Gallery</h2>
                    <button class="add-car">Add Car +</button>
                </div>
            </div>
            <div class="grid-content">
                <div class="cars-info">
                    <div class="img-box">
                        <img src="img/cars/drift/bmw-m3-tandem-drift-drift-bmw-m3-dva-zanos-drift-asfalt-mash.jpg">
                    </div>
                    <div class="info">
                        <button class="read-more">Read More</button>
                        <button class="delete-button">Delete Car</button>
                    </div>
                </div>

                <div class="cars-info">
                    <div class="img-box">
                        <img src="img/cars/drift/avtomobil-vyderzhka-drift.jpg">
                    </div>
                    <div class="info">
                        <button class="read-more">Read More</button>
                        <button class="delete-button">Delete Car</button>
                    </div>
                </div>

                <div class="cars-info">
                    <div class="img-box">
                        <img src="img/cars/drift/drift-drifter-driftking-5513.jpg">
                    </div>
                    <div class="info">
                        <button class="read-more">Read More</button>
                        <button class="delete-button">Delete Car</button>
                    </div>
                </div>

                <div class="cars-info">
                    <div class="img-box">
                        <img src="img/cars/drift/ford-fiesta-ken-block-drift-2273.jpg">
                    </div>
                    <div class="info">
                        <button class="read-more">Read More</button>
                        <button class="delete-button">Delete Car</button>
                    </div>
                </div>

                <div class="cars-info">
                    <div class="img-box">
                        <img src="img/cars/drift/game-nfs-need-for-speed.jpg">
                    </div>
                    <div class="info">
                        <button class="read-more">Read More</button>
                        <button class="delete-button">Delete Car</button>
                    </div>
                </div>

                <div class="cars-info">
                    <div class="img-box">
                        <img src="img/cars/drift/skyline-cars-avtomobili-drift.jpg">
                    </div>
                    <div class="info">
                        <button class="read-more">Read More</button>
                        <button class="delete-button">Delete Car</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>

<?php

include "components/modal-windows/video-modal.php";
include "components/modal-windows/cars-modal.php";
include "components/modal-windows/read-more-modal.php";
include "components/modal-windows/report-modal.php";
include "components/modal-windows/user-avatar-modal.php";
include "components/modal-windows/background-modal.php";
include "components/modal-windows/avatar-modal.php";

?>



<script src="js/modal-image.js"></script>
<script src="js/tabs.js"></script>
<script src="js/youtube-reg.js"></script>
<script src="js/input-file-buttons.js"></script>
<script src="js/modal-windows.js"></script>
<script src="js/events-call.js"></script>
<script src="js/accordion.js"></script>

</body>
</html>