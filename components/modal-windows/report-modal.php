<?php
/**
 * Created by PhpStorm.
 * User: LETO
 * Date: 17.05.2018
 * Time: 9:26
 */

?>

<div class="bg-report-modal">
    <div class="modal">
        <h2>Report</h2>

        <form action="#" method="POST">

            <select name="gender">
                <option value="" disabled selected hidden>Report's type</option>
                <option value="insults">Insults</option>
                <option value="pornography">Pornography</option>
                <option value="spam">Spam</option>
                <option value="clone">Clone of my account</option>
            </select><br>

            <textarea placeholder="Type a report"></textarea><br>
            <div class="report-buttons">
                <input type="submit" name="submit_report" value="Send">
                <input type="button" value="Close" class="close-modal-report">
            </div>

        </form>
    </div>
</div>
