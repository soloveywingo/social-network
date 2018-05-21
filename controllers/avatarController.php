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