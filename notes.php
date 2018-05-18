<?php
/**
 * Created by PhpStorm.
 * User: LETO
 * Date: 11.05.2018
 * Time: 5:34
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

    <div class="notes-header">
        <div class="typing-animation">
            <span id="quote"></span>
        </div>
    </div>

    <div class="notes-content">
        <div class="wrapper holder">

            <div class="top-panel">
                <h4>Leave your notes</h4>
                <input type="text" id="noteInput" placeholder="Type note here"><br>
                <button id="addNote">Add note</button>
            </div>

            <div class="list-panel">

                <div id="noteList">
                    <div class="grid-content">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<script src="js/todo.js"></script>
<script src="js/typing-text.js"></script>
</body>
</html>
