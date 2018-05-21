<?

$user = R::load('users2', $_SESSION['logged_user']->id);
$data = $_POST;

if (isset($data['submit_ph'])) {

    if (getimagesize($_FILES['change_ava']["tmp_name"]) == false) {
        $errors[] = "IT IS NOT A FUCKING IMAGE";
    } else {
        $user->name = "worked";
        $avatar = addslashes($_FILES['change_ava']['tmp_name']);
        $avatar = file_get_contents($avatar);
        $avatar = base64_encode($avatar);
        saveAvatar($avatar);

    }
}
function saveAvatar($avatar)
{

    $user = R::load('users2', $_SESSION['logged_user']->id);
    $user->avatar = $avatar;
    R::store($user);

}

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

