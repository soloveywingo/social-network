<?
$data = $_POST;
$friends = R::findAll('friends');
if (isset($data['add_friend'])) {

    foreach ($friends as $friend) {
        if ($_SESSION['logged_user']->id == $friend->id_user && $visitUser->id == $friend->id_friend && $friend->status == 1) {
            $errors[] = 'already added';
        }
        if ($_SESSION['logged_user']->id == $friend->id_user && $visitUser->id == $friend->id_friend && $friend->status == 0) {
            $friend->status = 1;
            R::store($friend);
            $errors[] = ['added again'];
        }
    }
    if (empty($errors)) {
        $friend = new Friend();
        $friend->addFriend();
        ?>
        <script>
            document.location.href = "";
        </script>

        <?
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

class Friend
{
    function addFriend()
    {
        $friends = R::dispense('friends');
        $friends->id_user = $_SESSION['logged_user']->id;
        $friends->id_friend = $_GET['id'];
        $friends->status = 1;
        R::store($friends);
    }
}

