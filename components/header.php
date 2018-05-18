<?php
error_reporting(E_ERROR);

require "controllers/signInController.php";
require "includes/db.php";

$user = R::load('users2', $_SESSION['logged_user']->id);

?>
<header>
    <div class="wrapper holder">
        <div class="flex-container">
            <span class="page-name">Profile settings</span>
            <form action="#" method="POST">
                <input type="text" placeholder="Search friends..." class="input-search-panel">
                <button class="submit"><i class="fa fa-search" aria-hidden="true"></i></button>

                <!-- SEARCH PANEL-->

                <div class="search-panel">
                    <div class="user">
                        <div class="around-img">
                            <img src="../img/users/bohdan.jpg">
                        </div>
                        <a href="#">Soloviyv Bohdan</a><br>
                        <span class="user-status">Space cowboy</span>
                    </div>

                    <div class="user">
                        <div class="around-img">
                            <img src="../img/users/1MA9kvUVdFY.jpg">
                        </div>
                        <a href="#">Vasilenko Sergey</a><br>
                        <span class="user-status">Space cowboy</span>
                    </div>

                    <div class="user">
                        <div class="around-img">
                            <img src="../img/users/BNaB-nWedts.jpg">
                        </div>
                        <a href="#">Nepochatov Vadim</a><br>
                        <span class="user-status">Space cowboy</span>
                    </div>

                    <div class="user">
                        <div class="around-img">
                            <img src="../img/users/j_WY_ZBs5FM.jpg">
                        </div>
                        <a href="#">Radchenko Vladimir</a><br>
                        <span class="user-status">Space cowboy</span>
                    </div>

                    <div class="user">
                        <div class="around-img">
                            <img src="../img/users/Lv1CepMuOtw.jpg">
                        </div>
                        <a href="#">Stetsenko Leonid</a><br>
                        <span class="user-status">Space cowboy</span>
                    </div>

                    <div class="user">
                        <div class="around-img">
                            <img src="../img/users/ZJbW_nE15WY.jpg">
                        </div>
                        <a href="#">Rolenko Anastasia</a><br>
                        <span class="user-status">Space cowboy</span>
                    </div>
                </div>
            </form>
            <div class="tools">
                <img class="hand-panel" src="../img/icons/icons8-hand-peace-32.png">
                <img class="comments-panel" src="../img/icons/icons8-comments-32.png">
                <img class="idea-panel" src="../img/icons/icons8-idea-32.png">
            </div>
            <div class="profile-view holder">
                <div class="user-photo-border">
                    <?echo '<img height="300" width = "300" src = "data:image;base64,'.$user->avatar.'" ';?>
                </div>
                <span class="user-name"><? echo $user->name ." " . $user->lastName  ?></span>
                <i class="fa fa-caret-down" aria-hidden="true"></i><br>
                <span class="user-status">Space Cowboy</span>
            </div>
        </div>
    </div>

    <!-- BOX SHOWER !-->
    <div class="boxes">
        <div class="first-box holder">
            <h3>Friends requests</h3>
            <div class="box-main">
                <div class="person">
                    <div class="flex-container">
                        <img src="../img/user-photo.jpg">
                        <div class="person-name">
                            <span>Sergey Vasilenko</span><br>
                            <span class="person-status">Space Cowboy</span>
                        </div>
                        <div class="friends-buttons">
                            <button class="accept"><i class="ti-face-smile"></i></button>
                            <button class="reject"><i class="ti-face-sad"></i></button>
                        </div>
                    </div>
                </div>
                <div class="person">
                    <div class="flex-container">
                        <img src="../img/user-photo.jpg">
                        <div class="person-name">
                            <span>Leonid Stetsenko</span><br>
                            <span class="person-status">Space Cowboy</span>
                        </div>
                        <div class="friends-buttons">
                            <button class="accept"><i class="ti-face-smile"></i></button>
                            <button class="reject"><i class="ti-face-sad"></i></button>
                        </div>
                    </div>
                </div>
                <div class="person">
                    <div class="flex-container">
                        <img src="../img/user-photo.jpg">
                        <div class="person-name">
                            <span>Vlodimir Radchenko</span><br>
                            <span class="person-status">Space Cowboy</span>
                        </div>
                        <div class="friends-buttons">
                            <button class="accept"><i class="ti-face-smile"></i></button>
                            <button class="reject"><i class="ti-face-sad"></i></button>
                        </div>
                    </div>
                </div>
                <div class="person">
                    <div class="flex-container">
                        <img src="../img/user-photo.jpg">
                        <div class="person-name">
                            <span>Vadim NEpochatov</span><br>
                            <span class="person-status">Space Cowboy</span>
                        </div>
                        <div class="friends-buttons">
                            <button class="accept"><i class="ti-face-smile"></i></button>
                            <button class="reject"><i class="ti-face-sad"></i></button>
                        </div>
                    </div>
                </div>
                <div class="person">
                    <div class="flex-container">
                        <img src="../img/user-photo.jpg">
                        <div class="person-name">
                            <span>Alex Stetsenko</span><br>
                            <span class="person-status">Space Cowboy</span>
                        </div>
                        <div class="friends-buttons">
                            <button class="accept"><i class="ti-face-smile"></i></button>
                            <button class="reject"><i class="ti-face-sad"></i></button>
                        </div>
                    </div>
                </div>
                <div class="person">
                    <div class="flex-container">
                        <img src="../img/user-photo.jpg">
                        <div class="person-name">
                            <span>Alexey Svlasenko</span><br>
                            <span class="person-status">Space Cowboy</span>
                        </div>
                        <div class="friends-buttons">
                            <button class="accept"><i class="ti-face-smile"></i></button>
                            <button class="reject"><i class="ti-face-sad"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer ">
                <span>Check your all Events</span>
            </div>
        </div>

        <div class="second-box holder">
            <h3>Chat/Messages</h3>
            <div class="box-main">
                <div class="message">
                    <img src="../img/user-photo.jpg">
                    <span>Sergey Vasilenko</span>
                    <div class="this-message">
                        <p>Hi. I need your help with pc. Could you help me, please?</p>
                    </div>
                    <i>4 hours ago</i>
                </div>
                <div class="message">
                    <img src="../img/user-photo.jpg">
                    <span>Sergey Vasilenko</span>
                    <div class="this-message">
                        <p>Hi. I need your help with pc. Could you help me, please?</p>
                    </div>
                    <i>4 hours ago</i>
                </div>
                <div class="message">
                    <img src="../img/user-photo.jpg">
                    <span>Sergey Vasilenko</span>
                    <div class="this-message">
                        <p>Hi. I need your help with pc. Could you help me, please?</p>
                    </div>
                    <i>4 hours ago</i>
                </div>
                <div class="message">
                    <img src="../img/user-photo.jpg">
                    <span>Sergey Vasilenko</span>
                    <div class="this-message">
                        <p>Hi. I need your help with pc. Could you help me, please?</p>
                    </div>
                    <i>4 hours ago</i>
                </div>
            </div>
            <div class="box-footer holder">
                <span>View all Messages</span>
            </div>
        </div>

        <div class="third-box holder">
            <h3>Notifications</h3>
            <div class="box-footer holder">
                <span>View all Notifications</span>
            </div>
        </div>
    </div>

    <div class="user-box">
        <h3>Your account</h3>
        <div class="items-box">
            <ul>
                <li><i class="ti-settings"></i>
                    <a href="../profile-settings.php"><span>Profile Setting</span></a></li>
                <li><i class="ti-arrow-circle-left"></i>
                    <a href="../sign-in.php">Log Out</a></li>
            </ul>
        </div>
        <h3>Chat Settings</h3>
        <div class="chat-setting">
            <div class="online"></div>
            <span>Online</span><br>
            <div class="away"></div>
            <span>Away</span><br>
            <div class="disconnected"></div>
            <span>Disconnected</span><br>
            <div class="invisible"></div>
            <span>invisible</span>
        </div>
        <h3>Custom Status</h3>
        <div class="custom-status">
            <form action="#" method="POST">
                <input type="text" value="SPACE COWBOY">
                <button type="submit" name="user_status"><i class="ti-pencil"></i></button>
            </form>
        </div>
        <h3>About AvtoNet</h3>
        <div class="about-us">
            <ul>
                <li><a href="../terms-conditions.php">Terms and Conditions</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="../developers.php">Developers</a></li>
            </ul>
        </div>
    </div>

    <!-- BOX SHOWER END !-->

</header>