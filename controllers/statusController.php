<?
$user = R::load('users2', $_SESSION['logged_user']->id);
$data = $_POST;
if (isset($data['change_status']))
{

if (!empty($data['status_textbox']))
{
$user->status = $data['status_textbox'];
R::store($user);
}
}

