<?php
require "includes/db.php";
$data = $_POST;
if (isset($data['do_signup']))
{

    if(trim($data['name']) == '')
    {
        $errors[] = " <div class='wrapper holder'>
                        <div class='wrong-name' > 
                            <span>Please, enter your name.</span>
                        </div>
                      </div>";
    }
    if(trim($data['lastName']) == '')
    {
        $errors[] = " <div class='wrapper holder'>
                        <div class='wrong-name' > 
                            <span>Please, enter your last name.</span>
                        </div>
                      </div>";

    }
    if($data['password'] == '')
    {
        $errors[] = " <div class='wrapper holder'>
                        <div class='wrong-name' > 
                            <span>Please, enter your password.</span>
                        </div>
                      </div>";
    }
    if($data['rePassword'] != $data['password'])
    {
        $errors[] = " <div class='wrapper holder'>
                        <div class='wrong-name' > 
                            <span>Your passwords do not match, try again.</span>
                        </div>
                      </div>";
    }
    if($data['birthday'] == '')
    {
        $errors[] = " <div class='wrapper holder'>
                        <div class='wrong-name' > 
                            <span>Tell me when were you born?</span>
                        </div>
                      </div>";
    }
    if(trim($data['gender']) == '')
    {
        $errors[] = 'Choose your gender';
    }
    if (empty($_REQUEST['termsCheckBox']))
    {
        $errors[] = " <div class='wrapper holder'>
                        <div class='wrong-name' > 
                            <span>Please read our Terms and Conditions and accept it</span>
                        </div>
                      </div>";
    }
    if (R::count('users2', "email = ?" , array($data['email'])) > 0)
    {
        $errors[] = " <div class='wrapper holder'>
                        <div class='wrong-name' > 
                            <span>This email arleady been registred</span>
                        </div>
                      </div>";
    }
    if (empty($errors))
    {

        //submit registration
        $us = new User();
        $us->createUser();


            echo " <div class='wrapper holder'>
                        <div class='wrong-name' > 
                            <span>YES, INDEED</span>
                        </div>
                      </div>";

    }else
        {
            echo  array_shift($errors);


    }
}

class User
{
    function createUser()
    {
        $data = $_POST;
        $user = R::dispense('users2');
        $hobbies = R::dispense('hobbies');
        $education = R::dispense('education');

        $education->school = "";
        $education->university = "";
        $education->courses = "";
        $education->college = "";
        R::store($education);


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
        $user->isMerried = "";
        $user->info = "";
        $user->occupation = "";
        $user->id_education = $education->id;
        $user->number = "00000000";

        $ip = $_SERVER['REMOTE_ADDR'];
        $locationData = get_meta_tags('http://www.geobytes.com/IpLocator.htm?GetLocation&template=php3.txt&IpAddress=' . $ip);
        $user->location = $locationData['country'] ." " . $locationData['city'];

        R::store($user);
    }
}


