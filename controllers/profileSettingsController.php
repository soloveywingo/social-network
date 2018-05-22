<?
$user = R::load('users2', $_SESSION['logged_user']->id);
$hobbies = R::load('hobbies', $_SESSION['logged_user']->id_hobbies);
$education = R::load('education', $_SESSION['logged_user']->id_education);
$data = $_POST;

// ---PROFILE INFO
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
    if (!empty($data['info_textbox'])) {
        $user->info = $data['info_textbox'];
    }
    if (!empty($data['birthday_textbox'])) {
        $user->birthday = $data['birthday_textbox'];
    }
    if (!empty($data['gender'])) {
        $user->gender = $data['gender'];
    }
    if (!empty($data['isMerried'])) {
        $user->isMerried = $data['isMerried'];
    }
    if (!empty($data['occupation_textbox'])) {
        $user->occupation = $data['occupation_textbox'];
    }
    if (!empty($data['occupation_textbox'])) {
        $user->occupation = $data['occupation_textbox'];
    }

    if (!empty($data['hobbies'])) {
        $hobbies->hobbies = $data['hobbies'];
    }

    if (!empty($data['music'])) {
        $hobbies->music = $data['music'];
    }

    if (!empty($data['shows'])) {
        $hobbies->shows = $data['shows'];
    }

    if (!empty($data['movies'])) {
        $hobbies->movies = $data['movies'];
    }

    if (!empty($data['books'])) {
        $hobbies->books = $data['books'];
    }

    if (!empty($data['writers'])) {
        $hobbies->writers = $data['writers'];
    }

    if (!empty($data['games'])) {
        $hobbies->games = $data['games'];
    }

    if (!empty($data['cars'])) {
        $hobbies->cars = $data['cars'];
    }
    if (!empty($data['school'])) {
        $education->school = $data['school'];
    }
    if (!empty($data['university'])) {
        $education->university = $data['university'];
    }
    if (!empty($data['courses'])) {
        $education->courses = $data['courses'];
    }
    if (!empty($data['college'])) {
        $education->college = $data['college'];
    }

    R::store($hobbies);
    R::store($user);
    R::store($education);

}

// HOBBIES AND INTERESTS


