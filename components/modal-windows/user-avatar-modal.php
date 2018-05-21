<?php


?>
<div class="upload-photo-modal-bg">
    <div class="modal">
        <h2>Change photo</h2>

        <form method="POST" enctype="multipart/form-data">

            <label for="changePhoto" id="changeUserPhoto">Change photo</label>
            <input type="file" name="change_ava" id="changePhoto"><br>

            <div class="buttons">
                <input type="submit" name="submit_ph" value="Okay">
                <input type="button" name="close_modal_photo" value="Close" class="close-avatar-user-modal">
            </div>

        </form>
    </div>
</div>

