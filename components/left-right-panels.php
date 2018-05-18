<?php
/**
 * Created by PhpStorm.
 * User: LETO
 * Date: 26.04.2018
 * Time: 11:29
 */ ?>

<div class="left-panel">
    <h1 class="logo">
        <a href="../index.php"><img src="../img/logo1.png" alt="logo avto net"></a>
    </h1>
    <ul class="left-navigation">
        <li><span data-tooltip="Open menu" class="fas fa-bars open-menu" id="openMenu"></span></li>
        <li><a href="../index.php"><span data-tooltip="Profile" class="fas fa-address-card"></span></a></li>
        <li><a href="../messages.php"><span data-tooltip="Message" class="fas fa-comments"></span></a></li>
        <!--  <li><a href="#"><span data-tooltip="Newsfeed" class="ti-receipt"></span></a></li>
          <li><a href="#"><span data-tooltip="Groups" class="ti-comments-smiley"></span></a></li>-->
        <li><a href="../playlist.php"><span data-tooltip="Playlist" class="fas fa-music"></span></a></li>
        <li><a href="#"><span data-tooltip="Weather" class="fas fa-bolt"></span></a></li>
        <li><a href="../notes.php"><span data-tooltip="Notes" class="fas fa-pen-square"></span></a></li>
    </ul>
</div>
<div class="full-left-panel">
    <ul class="full-left-navigation">
        <h1 class="logo">
            <a href="../index.php"><img src="../img/logo1.png" alt="logo avto net">
                <span>AvtoNet</span></a>

        </h1>
        <li>
            <span class="fas fa-times close-menu" id="closeMenu"></span>
            <i>Collapse Menu</i></li>
        <li><a href="../index.php">
                <span class="fas fa-address-card"></span>
                <i>Profile</i>
            </a></li>
        <li><a href="../messages.php">
                <span class="fas fa-comments"></span>
                <i>Message</i>
            </a></li>
        <!-- <li><a href="#">
                 <span class="ti-receipt"></span>
                 <i>Newsfeed</i>
             </a></li>
         <li><a href="#">
                 <span class="ti-comments-smiley"></span>
                 <i>Groups</i>
             </a></li>-->
        <li><a href="../playlist.php">
                <span class="fas fa-music"></span>
                <i>Playlist</i>
            </a></li>
        <li><a href="#">
                <span class="fas fa-bolt"></span>
                <i>Weather</i>
            </a></li>
        <li><a href="../notes.php">
                <span class="fas fa-pen-square"></span>
                <i>Notes</i>
            </a></li>
    </ul>
</div>

<div class="right-panel">
    <div class="icons-groups">
        <div class="around-user-photo">
            <img src="../img/users/1MA9kvUVdFY.jpg" alt="User photo">
        </div>
    </div>
    <div class="right-panel-footer">
        <span class="fas fa-bars open-bottom-menu"></span>
    </div>
</div>

<div class="full-right-panel holder">
    <div class="icons-groups holder">
        <div class="setting-group">
            <a href="#">
                <div class="around-user-photo">
                    <img src="../img/users/1MA9kvUVdFY.jpg" alt="User photo">
                </div>
                <div class="info-user">
                    <span>Sergey Vasilenko</span><br>
                    <i>Online</i>
                </div>
            </a>
        </div>
    </div>
    <div class="setting">
        <div class="flex-container">
            <form action="#" method="POST">
                <input type="text" placeholder="Search friends..." class="search-friends-right-panel">
            </form>
            <div class="buttons">
                <i class="fas fa-times close-bottom-menu"></i>
            </div>
        </div>
    </div>
    <h2 class="bottom-logo">
        <span>Friends list</span>
        <i class="fas fa-user-friends"></i>
    </h2>
</div>


