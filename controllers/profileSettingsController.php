<?
$user = R::load('users2', $_SESSION['logged_user']->id);
$data = $_POST;

if (isset($data["submit_changes"])) {
    if (!empty($data['name_textbox'])) {
        $user->name = $data['name_textbox'];
    }

    if (!empty($data['lastName_textbox'])) {
        $user->lastName = $data['lastName_textbox'];
    }
    if (!empty($data['location_textbox'])) {
        $user->location = $data['location_textbox'];
    }
    if (!empty($data['info_textbox']))
    {
        $user->info = $data['info_textbox'];
    }
    if (!empty($data['birthday_textbox']))
    {
        $user->birthday = $data['birthday_textbox'];
    }
    if (!empty($data['gender']))
    {
        $user->gender = $data['gender'];
    }
    if (!empty($data['isMerried']))
    {
        $user->isMerried = $data['isMerried'];
    }
    if (!empty($data['occupation_textbox']))
    {
        $user->occupation = $data['occupation_textbox'];
    }
    R::store($user);
}

