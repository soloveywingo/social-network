<?$data = $_POST;

if (isset($data['delete_avatar']))
{
    if (getimagesize($_FILES['change_avatar']["tmp_name"]) == false) {
        $errors[] = "IT IS NOT A FUCKING IMAGE";
    } else
    {
        $avatar = addslashes($_FILES['change_avatar']['tmp_name']);
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