<?

$user = R::load('users2', $_SESSION['logged_user']->id);
$data = $_POST;

if (isset($data['massage_send'])) {
    $massage = R::dispense('massages');
    $massage->user_from = $_SESSION['logged_user']->id; //s
    $massage->user_to = $_GET['sendTo'];
    $massage->text = $data['massage_text'];
    $massage->time = date("Y-m-d H:i:s");
    R::store($massage);
    ?>
    <script>
        document.location.href = "";
    </script>>

    <?
}


?>