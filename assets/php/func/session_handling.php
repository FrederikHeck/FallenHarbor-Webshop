<?php
    session_start();

    $session = isset($_GET['session']) ? $_GET['session'] : '';
    $displayError = false;


    #login-attempt: check username password combination
    if($session === 'start'){
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $username = $db->escape_String($username);

        #does the user exist?
        if($user = User::getUserByUsername($username)) {
            $enteredPassword = isset($_POST['password']) ? $_POST['password'] : '';
            //validate Password

            $hashed_password = password_hash($enteredPassword, PASSWORD_DEFAULT);

            $realPassword = $user->getPassword();

            #is the password correct
            if (password_verify($enteredPassword, $realPassword)) {
                $_SESSION['user'] = $user;
                $_SESSION['start'] = true;
            } else {
                $displayError = true;
            }
        }
        else $displayError = true;
    }
    #logout request
    elseif ($session === 'end'){
        unset($_SESSION['user']);
        $_SESSION['start'] = false;
        $_SESSION['startMini'] = false;
    }
    #user doesn't want to create an user-account for his order
    elseif ($session === 'startMiniSession'){
        require("assets/php/func/get_user_post_data.php");
        $user = new User();
        $user->createUser($username, $password, $firstname, $lastname, $street, $street_number, $city, $postal, $country);
        $_SESSION['user'] = $user;
        $_SESSION['startMini'] = true;
    }

    $sessionRunning = isset($_SESSION['start']) ? $_SESSION['start'] : false;
    $miniSessionRunning = isset($_SESSION['startMini']) ? $_SESSION['startMini'] : false;

if($sessionRunning || $miniSessionRunning){
    $user = $_SESSION['user'];
}

// Create cart on first request
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = new Cart();
}

// Get cart from session
$cart = $_SESSION["cart"];
