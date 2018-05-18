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

<main class="none-margin">

    <?php include "components/left-right-panels.php" ?>

    <div class="message-header">
        <div class="typing-animation">
            <span id="quote"></span>
        </div>
    </div>

    <div class="message-content">
        <div class="wrapper holder">
            <div class="left-box">
                <div class="search-box">
                    <h4>Friends list</h4>
                    <input type="text" placeholder="Filter friends" class="input-filter-friends">
                </div>
                <div class="friend-box">

                    <div class="user">
                        <div class="around-img">
                            <img src="img/users/1MA9kvUVdFY.jpg">
                        </div>
                        <div class="user-name">
                            <span>Vasilenko</span><br>
                            <span>Sergey</span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="right-box">
                <div class="right-box-header">
                    <div class="user holder">
                        <div class="around-img">
                            <img src="img/users/1MA9kvUVdFY.jpg">
                        </div>
                        <div class="user-name">
                            <span>Vasilenko </span>
                            <span>Sergey</span>
                        </div>
                    </div>

                    <div class="message-box">
                        <div class="fix-size">
                            <div class="inbox-message holder">
                                <div class="around-img">
                                    <img src="img/users/1MA9kvUVdFY.jpg">
                                </div>
                                <div class="message">
                                    <p>Hello. How are you? How is your car?</p>
                                </div>
                                <br>
                                <div class="message">
                                    <p>Hello. How are you? How is your car?</p>
                                </div>
                                <br>
                                <div class="message">
                                    <p>Hello. How are you? How is your car?</p>
                                </div>
                                <br>
                                <div class="message">
                                    <p>Hello. How are you? How is your car?</p>
                                </div>
                                <br>
                                <div class="message">
                                    <p>Hello. How are you? How is your car?</p>
                                </div>
                                <br>
                                <div class="message">
                                    <p>Hello. How are you? How is your car?</p>
                                </div>
                                <br>
                                <div class="message">
                                    <p>Hello. How are you? How is your car?</p>
                                </div>
                                <br>
                                <div class="message">
                                    <p>Hello. How are you? How is your car?</p>
                                </div>
                                <br>
                            </div>
                        </div>

                        <div class="outbox-message">
                            <div class="around-img">
                                <img src="img/new_photo.jpg">
                            </div>
                            <div class="message">
                                <p>I'm fine. And you? Car is good also. How is your car, dude?</p>
                            </div><br>

                            <div class="message">
                                <p>I'm fine. And you? Car is good also. How is your car, dude?</p>
                            </div><br>

                            <div class="message">
                                <p>I'm fine. And you? Car is good also. How is your car, dude?</p>
                            </div><br>

                            <div class="message">
                                <p>I'm fine. And you? Car is good also. How is your car, dude?</p>
                            </div><br>

                            <div class="message">
                                <p>I'm fine. And you? Car is good also. How is your car, dude?</p>
                            </div><br>

                            <div class="message">
                                <p>I'm fine. And you? Car is good also. How is your car, dude?</p>
                            </div><br>

                            <div class="message">
                                <p>I'm fine. And you? Car is good also. How is your car, dude?</p>
                            </div><br>

                        </div>
                    </div>
                </div>

                <div class="type-message">
                    <textarea placeholder="Type..."></textarea>
                </div>
            </div>
        </div>
    </div>

</main>

<script src="js/message-page-header.js"></script>
<script src="js/filter-friends.js"></script>

</body>
</html>
