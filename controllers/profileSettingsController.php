<?
$user = R::load('users2', $_SESSION['logged_user']->id);
$data = $_POST;

if (isset($data["submit_changes"]))
{
if (!empty($data['name_textbox']))
{
$user->name = $data['name_textbox'];
R::store($user);
}

if (!empty($data['lastName_textbox']))
{
$user->lastName = $data['lastName_textbox'];
R::store($user);
}

}

