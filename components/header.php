<?php
error_reporting(E_ERROR);
require "controllers/signInController.php";
require "includes/db.php";
require "controllers/statusController.php";


if (isset($data['log_out'])) {
    unset($_SESSION['logged_user']);
}

if (isset($data[$person->id]))
{

}

?>
<header>
    <div class="wrapper holder">
        <div class="flex-container">
            <span class="page-name">Profile settings</span>
            <div class="fix-class">
                <form action="#" method="POST">
                    <input type="text" placeholder="Search friends..." class="input-search-panel">
                    <button class="submit"><i class="fa fa-search" aria-hidden="true"></i></button>

                    <!-- SEARCH PANEL-->
                    <div class="search-panel">

                        <?
                        $users = R::findAll('users2');

                        foreach ($users as $person) {
                            if ($person->id != $_SESSION['logged_user']->id) {
                                if (isset($person->name)) {
                                    $id = $person->id;
                                    ?>

                                    <div class="user">
                                        <div class="around-img holder">
                                            <a href="visit.php?id=<?
                                            echo $person->id ?>"> <? echo '<img src = "data:image;base64,' . $person->avatar . '"> '; ?></a>
                                        </div>
                                        <form>
                                            <a href="visit.php?id=<?
                                            echo $person->id ?>"> <? echo $person->name . " " . $person->lastName ?> </a>

                                            <br>

                                            <span class="user-status"><?
                                                echo $person->status ?></span></form>
                                    </div>

                                    <?
                                }
                            }
                        }
                        ?>
                    </div>
                </form>
            </div>
            <div class="tools">
                <img class="hand-panel" src="../img/icons/icons8-hand-peace-32.png">
                <img class="comments-panel" src="../img/icons/icons8-comments-32.png">
                <img class="idea-panel" src="../img/icons/icons8-idea-32.png">
            </div>
            <div class="profile-view holder">
                <div class="user-photo-border">
                    <? echo '<img src = "data:image;base64,' . $user->avatar . '" '; ?>
                </div>
            </div>
            <span class="user-name"><? echo $user->name . " " . $user->lastName ?></span>
            <i class="fa fa-caret-down" aria-hidden="true"></i><br>
            <span class="user-status"><? echo $user->status ?></span>
        </div>
    </div>


    <!-- BOX SHOWER !-->
    <div class="boxes">
        <div class="first-box holder">
            <h3>Friends requests</h3>
            <div class="box-main">

                <?php

                $friends = R::findAll('friends');

                foreach ($friends as $friend)
                {
                    if ($_SESSION['logged_user']->id == $friend->id_friend)
                    {
                     $friendNotice = R::load('users2',$friend->id_user)

                ?>
                <div class="person">
                    <div class="flex-container">
                     <!--   --><?/* echo '<img src = "data:image;base64,' . $friendNotice->avatar . '" '; */?>
                        <div class="person-name">
                            <a href="visit.php?id=<?echo $friendNotice->id ?>"> <span><? echo $friendNotice->name . " " . $friendNotice->lastName ?> </span></a>
                            added you as friend<br>  <!-- --------------- do something here, does`nt look great!-->
                            <span class="person-status"></span>
                        </div>
                        <div class="friends-buttons">
                            <button class="accept"><i class="ti-face-smile"></i></button>
                            <button class="reject"><i class="ti-face-sad"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <? }}?>
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

            <a href="../profile-settings.php"><span>Profile Setting</span></a></li>
            <form action="../sign-in.php" method="POST" class="log-out">

                <input type="submit" name="log_out" value="Log out" class="log-out">
            </form>

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
                <input type="text" value="" name="status_textbox">
                <button type="submit" name="change_status"><i class="ti-pencil"></i></button>
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