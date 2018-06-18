<?php
/**
 * Created by PhpStorm.
 * User: LETO
 * Date: 18.06.2018
 * Time: 20:15
 */

?>

<div class="bg-modal-add-new-photo">
    <div class="modal">
        <h2>Add new photo</h2>

        <form action="" method="POST" enctype="multipart/form-data">

            <label for="addPhotoProfile" id="addNewPhotoProfile">Add photo</label>
            <input type="file" name="add_new_photo" id="addPhotoProfile"><br>

            <div class="buttons">
                <input type="submit" name="submit_new_photo" value="Okay">
                <input type="button" name="close_modal_add_photo" value="Close" class="close-modal-add-photo">
            </div>

        </form>
    </div>
</div>
