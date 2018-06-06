<?php
/**
 * Created by PhpStorm.
 * User: LETO
 * Date: 11.05.2018
 * Time: 10:53
 */
?>

<!DOCTYPE html>
<html lang="en">

<?php include "components/head.php";


?>

<title>Notes</title>

<body>

<?php include "components/header.php";

require "controllers/chatController.php";
?>


<main>

    <?php include "components/left-right-panels.php" ?>

    <div class="message-content">
        <div class="wrapper holder">

            <div class="message-box">

                <div class="left-box">
                    <div class="left-box-header">
                        <form>

                            <input type="text" placeholder="Search..." class="input-filter-friends">

                        </form>
                    </div>

                    <div class="left-box-body">


                        <div class="user">

                            <?
                            $massegeFriends = R::findAll('friends');
                            $allMassages = R::findAll("massages");

                            foreach ($massegeFriends as $massegeFriend) {
                                if ($_SESSION['logged_user']->id == $massegeFriend->id_user) {
                                    $friendTo = R::load("users2", $massegeFriend->id_friend);
                                    ?>
                                    <ul>
                                        <li>
                                            <form method="get">
                                            <a href="?sendTo=<? echo $massegeFriend->id_friend; ?>">
                                                </form>
                                                <div class="flex-container">
                                                    <div class="around-user-img">
                                                        <? echo '<img src = "data:image;base64,' . $friendTo->avatar . '"> '; ?>
                                                    </div>
                                                    <div class="user-info">
                                                        <span><? echo $friendTo->name . " " . $friendTo->lastName ?></span>
                                                        <span class="status-span"><? echo $friendTo->status; ?></span>
                                                    </div>
                                                    <div class="time-visit">
                                                        <span><? echo $lastTime; ?></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                <? }
                            } ?>
                        </div>
                    </div>
                </div>

                <?
                $rightBuddy = R::load("users2", $_GET['sendTo']);
                ?>
                <div class="right-box">

                    <div class="right-box-header">
                        <div class="user-name">
                            <span><? echo $rightBuddy->name . " " . $rightBuddy->lastName; ?></span><br>
                        </div>

                        <div class="events-panel holder">
                            <form action="#" method="POST">

                                <button type="submit" title="Delete message" name="delete_message"><i
                                            class="fas fa-trash"></i></button>
                                <button class="copy-text" title="Copy text" name="copy_text" type="button"><i
                                            class="fas fa-copy"></i>
                                </button>

                                <button class="cancel" title="Cancel events" name="cancel" type="button"><i
                                            class="fas fa-window-close"></i></button>

                            </form>
                        </div>

                    </div>
                    <div class="right-box-body">


                        <?
                        foreach ($allMassages as $mas) {
                            if ($_SESSION['logged_user']->id == $mas->user_to && $_GET['sendTo'] == $mas->user_from) {


                                ?>
                                <div class="inbox-message">
                                    
                                    <div class="around-user-img holder">
                                        <? echo '<img src = "data:image;base64,' . $rightBuddy->avatar . '"> '; ?>>
                                    </div>

                                    <div class="message">
                                        <p>
                                            <? echo $mas->text; ?>
                                        </p>
                                    </div>

                                </div>
                            <? } //ss

                            if ($_SESSION['logged_user']->id == $mas->user_from && $_GET['sendTo'] == $mas->user_to) {
                                ?>

                                <div class="outbox-message">
                                    <div class="around-user-img holder">

                                        <? echo '<img src = "data:image;base64,' . $_SESSION['logged_user']->avatar . '"> '; ?>

                                    </div>
                                    <div class="message">
                                        <p>
                                            <? echo $mas->text; ?>
                                        </p>
                                    </div>

                                </div>
                            <? } ?>

                            <?
                        } // END OF FOREACH
                        ?>
                    </div>

                    <div class="right-box-footer">
                        <form action="" method="POST">

                            <input type="text" placeholder="type here..." name="massage_text">
                            <button type="submit" name="massage_send"><i class="fab fa-telegram-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<script src="js/filter-friends.js"></script>
<script src="js/message-events.js"></script>

</body>
</html>
