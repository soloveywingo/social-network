<?
$data = $_POST;
$ids = [];
$s = 0;
while ($s < 100) {
    $ids[$s] = $s;
    $s++;
}
$friends = R::loadAll('friends', $ids);
if (isset($data['add_friend'])) {

    foreach ($friends as $friend) {
        if ($_SESSION['logged_user']->id == $friend->id_user && $visitUser->id == $friend->id_friend && $friend->status == 1) {
            $errors[] = 'erleady added';
        }
    }
    if (empty($errors)) {
        $friends = R::dispense('friends');
        $friends->id_user = $_SESSION['logged_user']->id;
        $friends->id_friend = $visitUser->id;
        $friends->status = 1;
        R::store($friends);
    } else {
        echo array_shift($errors);
    }
}
if (isset($data['delete_friend']))
{
    foreach ($friends as $friend) {
        if ($_SESSION['logged_user']->id == $friend->id_user && $visitUser->id == $friend->id_friend && $friend->status == 1){
            $friend->status = 0;
            R::store($friend);
        }
    }
}
