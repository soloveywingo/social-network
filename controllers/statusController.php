<?
$user = R::load('users2', $_SESSION['logged_user']->id);
$data = $_POST;
if (isset($data['change_status'])) {

    if (!empty($data['status_textbox'])) {
        $st = new Status();
        $st->changeStatus();
    }
}
class Status
{
    function changeStatus()
    {
        $user = R::load('users2', $_SESSION['logged_user']->id);
        $user->status = $_POST['status_textbox'];
        R::store($user);
    }
}

