<?

$user = R::load('users2', $_SESSION['logged_user']->id);
$data = $_POST;

if (isset($data['submit_bg'])) {

    if (getimagesize($_FILES['change_back']["tmp_name"]) == false) {
        $errors[] = "IT IS NOT A FUCKING IMAGE";
    } else {
        $background = addslashes($_FILES['change_back']['tmp_name']);
        $background = file_get_contents($background);
        $background = base64_encode($background);
        saveBack($background);

    }
}
function saveBack($background)
{

    $user = R::load('users2', $_SESSION['logged_user']->id);
    $user->background = $background;
    R::store($user);

}

if (isset($data['delete_bg_photo']))
{
    $user->background = "";
    R::store($user);
}
?>