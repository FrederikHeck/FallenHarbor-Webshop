<?php

$successful_registration = false; #did the database entry creating work
$usernameExists = false;

if ($createUser){
    #does the username exist?
    if(User::getUserByUsername($username) == null){
        $user = new User();
        $user->createUser($username, $hashed_password, $firstname, $lastname, $street, $street_number, $city, $postal, $country, $email);
        $user->addUserToDB();
        $user = User::getUserByUsername($username); #fetch just created user-instance from DB
        if ($user != null){
            $_SESSION['user'] = $user;
            $_SESSION['start'] = true;
            $successful_registration = true; // start session / send mail
        }

    }
    else {
        $usernameExists = true;
    }
}





