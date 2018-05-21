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

<?php include "components/head.php" ?>

<title>Notes</title>

<body>

<?php include "components/header.php" ?>

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

                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="flex-container">
                                            <div class="around-user-img">
                                                <img src="img/users/1MA9kvUVdFY.jpg" alt="User photo">
                                            </div>
                                            <div class="user-info">
                                                <span>Sergey Vasilenko</span>
                                                <span class="status-span">Space cowboy</span>
                                            </div>
                                            <div class="time-visit">
                                                <span>14:20</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="right-box">

                    <div class="right-box-header">
                        <div class="user-name">
                            <span>Sergey Vasilenko</span><br>
                        </div>
                    </div>

                    <div class="right-box-body">
                        <div class="inbox-message">

                            <div class="around-user-img holder">
                                <img src="img/users/1MA9kvUVdFY.jpg" alt="User photo">
                            </div>

                            <div class="message">
                                <p>
                                    asdasdasdasdasdasasdasdasdasdasdasdasdasdasdasasdasdasdasdasdasdasdasdasdasasdasdasdasd
                                    asdasdasdasdasdasasdasdasdasd asdasdasdasdasdasasdasdasdasd
                                    asdasdasdasdasdasasdasdasdasdasdasdasdasdasdasasdasdasdasd
                                    asdasdasdasdasdasasdasdasdasd</p>
                            </div>

                            <div class="message">
                                <p>
                                    asdasdasdasdasdasasdasdasdasdasdasdasdasdasdasasdasdasdasdasdasdasdasdasdasasdasdasdasd
                                    asdasdasdasdasdasasdasdasdasd asdasdasdasdasdasasdasdasdasd
                                    asdasdasdasdasdasasdasdasdasdasdasdasdasdasdasasdasdasdasd
                                    asdasdasdasdasdasasdasdasdasd</p>
                            </div>

                            <div class="message">
                                <p>
                                    asdasdasdasdasdasasdasdasdasdasdasdasdasdasdasasdasdasdasdasdasdasdasdasdasasdasdasdasd
                                    asdasdasdasdasdasasdasdasdasd asdasdasdasdasdasasdasdasdasd
                                    asdasdasdasdasdasasdasdasdasdasdasdasdasdasdasasdasdasdasd
                                    asdasdasdasdasdasasdasdasdasd</p>
                            </div>

                            <div class="message">
                                <p>
                                    asdasdasdasdasdasasdasdasdasdasdasdasdasdasdasasdasdasdasdasdasdasdasdasdasasdasdasdasd
                                    asdasdasdasdasdasasdasdasdasd asdasdasdasdasdasasdasdasdasd
                                    asdasdasdasdasdasasdasdasdasdasdasdasdasdasdasasdasdasdasd
                                    asdasdasdasdasdasasdasdasdasd</p>
                            </div>
                        </div>

                        <div class="outbox-message">
                            <div class="around-user-img holder">
                                <img src="img/new_photo.jpg" alt="User photo">
                            </div>

                            <div class="message">
                                <p>
                                    asdasdasdasdasdasasdasdasdasdasdasdasdasdasdasasdasdasdasdasdasdasdasdasdasasdasdasdasd
                                    asdasdasdasdasdasasdasdasdasd asdasdasdasdasdasasdasdasdasd
                                    asdasdasdasdasdasasdasdasdasdasdasdasdasdasdasasdasdasdasd
                                    asdasdasdasdasdasasdasdasdasd</p>
                            </div>

                            <div class="message">
                                <p>
                                    asdasdasdasdasdasasdasdasdasdasdasdasdasdasdasasdasdasdasdasdasdasdasdasdasasdasdasdasd
                                    asdasdasdasdasdasasdasdasdasd asdasdasdasdasdasasdasdasdasd
                                    asdasdasdasdasdasasdasdasdasdasdasdasdasdasdasasdasdasdasd
                                    asdasdasdasdasdasasdasdasdasd</p>
                            </div>

                            <div class="message">
                                <p>
                                    asdasdasdasdasdasasdasdasdasdasdasdasdasdasdasasdasdasdasdasdasdasdasdasdasasdasdasdasd
                                    asdasdasdasdasdasasdasdasdasd asdasdasdasdasdasasdasdasdasd
                                    asdasdasdasdasdasasdasdasdasdasdasdasdasdasdasasdasdasdasd
                                    asdasdasdasdasdasasdasdasdasd</p>
                            </div>
                            <div class="message">
                                <p>
                                    asdasdasdasdasdasasdasdasdasdasdasdasdasdasdasasdasdasdasdasdasdasdasdasdasasdasdasdasd
                                    asdasdasdasdasdasasdasdasdasd asdasdasdasdasdasasdasdasdasd
                                    asdasdasdasdasdasasdasdasdasdasdasdasdasdasdasasdasdasdasd
                                    asdasdasdasdasdasasdasdasdasd</p>
                            </div>

                        </div>
                    </div>

                    <div class="right-box-footer">
                        <form action="#" method="POST">

                            <input type="text" placeholder="type here..." name="typing">
                            <button type="submit"><i class="fab fa-telegram-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<script src="js/filter-friends.js"></script>

</body>
</html>
