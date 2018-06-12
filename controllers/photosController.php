<?php
$data = $_POST;
if (isset($data['add_photo_button'])) {
    if (getimagesize($_FILES['add_photo']["tmp_name"]) == false) {
        $errors[] = "IT IS NOT A FUCKING IMAGE";
    } else {
    $ph = new Photo();
    $ph->addPhoto();
        ?>
        <script>
            document.location.href = "";
        </script>
        <?
    }
}

class Photo
{
    function addPhoto()
    {
        $photo = R::dispense('photos');
        $photo->id_user = $_SESSION['logged_user']->id;
        $s = addslashes($_FILES['add_photo']['tmp_name']);
        $s = file_get_contents($s);
        $s = base64_encode($s);
        $photo->photo = $s;
        R::store($photo);
    }
}