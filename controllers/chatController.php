<?
class Massage
{
    function createMassage()
    {
        $massage = R::dispense('massages');
        $massage->user_from = $_SESSION['logged_user']->id; //s
        $massage->user_to = $_GET['sendTo'];
        $massage->text = $_POST['massage_text'];
        $massage->time = date("H:i:s");
        R::store($massage);

    }
}
$user = R::load('users2', $_SESSION['logged_user']->id);
$data = $_POST;

if (isset($data['massage_send'])) {

    $mas = new Massage();
    $mas->createMassage();
?>
    <script>
        document.location.href = "";
    </script>>

<?
}




?>