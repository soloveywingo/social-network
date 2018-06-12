<?

$user = R::load('users2', $_SESSION['logged_user']->id);
$data = $_POST;

class Avatar
{
    function saveAvatar($avatar)
    {
        $user = R::load('users2', $_SESSION['logged_user']->id);
        $user->avatar = $avatar;
        R::store($user);
    }
}

if (isset($data['submit_ph'])) {
    $ava = new Avatar();
    if (getimagesize($_FILES['change_ava']["tmp_name"]) == false) {
        $errors[] = "IT IS NOT A FUCKING IMAGE";
    } else {
        $avatar = addslashes($_FILES['change_ava']['tmp_name']);
        $avatar = file_get_contents($avatar);
        $avatar = base64_encode($avatar);
        $ava->saveAvatar($avatar);

    }
}

if (isset($_POST['delete_avatar'])) {
    $user->avatar = "";
    R::store($user);
}

?>