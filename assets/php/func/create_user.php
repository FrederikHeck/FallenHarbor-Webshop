<?php
require("assets/php/func/get_user_post_data.php");

// Server-Side Validation of User Data
// * Empty Strings
// * Some Regex
// * If wrong -> redirect to register page

$successful = false; #did the database entry creating work
$usernameExists = false;

#does the username exist?
if(User::getUserByUsername($username) == null){
    $user = new User();
    $user->createUser($username, $password, $firstname, $lastname, $street, $street_number, $city, $postal, $country, $email);
    $user->addUserToDB();
    $user = User::getUserByUsername($username); #fetch just created user-instance from DB
    if ($user != null)
        $successful = true; // start session / send mail
}
else {
    $usernameExists = true;
}



