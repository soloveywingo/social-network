<?php
require "includes/db.php";
$data = $_POST;
if (isset($data['do_signup']))
{

    if(trim($data['name']) == '')
    {
        $errors[] = 'Please enter your name';
    }
    if(trim($data['lastName']) == '')
    {
        $errors[] = 'Please enter your last name';

    }
    if($data['password'] == '')
    {
        $errors[] = 'Please enter your password';
    }
    if($data['rePassword'] != $data['password'])
    {
        $errors[] = 'Your passwords do not match, try again';
    }
    if($data['birthday'] == '')
    {
        $errors[] = 'Tell me when were you born?';
    }
    if(trim($data['gender']) == '')
    {
        $errors[] = 'Choose your gender';
    }
    if (empty($_REQUEST['termsCheckBox']))
    {
        $errors[] = "Please read our Terms and Conditions and accept it";
    }
    if (R::count('users2', "email = ?" , array($data['email'])) > 0)
    {
        $errors[] = "This email arleady been registred";
    }
    if (empty($errors))
    {
        //submit registration
        $user = R::dispense('users2');
        $hobbies = R::dispense('hobbies');

        $hobbies->hobbies = "this is my hobby";
        $hobbies->music = "my music";
        $hobbies->shows = "my shows";
        $hobbies->games = "my games";
        $hobbies->movies = "my movies";
        $hobbies->books = "my books";
        $hobbies->writers = "my writers";
        $hobbies->games = "my games";
        $hobbies->cars = "my cars";
        R::store($hobbies);
        $user->name = $data['name'];
        $user->lastName = $data['lastName'];
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
        $user->email = $data['email'];
        $user->birthday = $data['birthday'];
        $user->gender = $data['gender'];
        $user->avatar = "";
        $user->background = "";
        $user->status = "hi, my name is " . $user->name;
        $user->id_hobbies = $hobbies->id;
        R::store($user);
        echo 'YES , INDEED';

    }else
        {
            echo  array_shift($errors);


    }
}


