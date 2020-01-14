<?php require("assets/php/func/validate_server.php") ?>
<script src="assets/js/validate_client.js"></script>


<?php
//checks if input validation was successful. If yes a mini-session is started
//in which all user data is stored in a session variable, the the user will be redirected.
//If not, the user stays on the page and gets an information

    $error_accured = false;

    if($input_error != ""){
        $error_accured = true;
    }

    else if ($redirection == ""){
        //start mini session (no DB-account created)
        require("assets/php/func/get_user_post_data.php");
        $user = new User();
        $user->createUser($username, $password, $firstname, $lastname, $street, $street_number, $city, $postal, $country, $email);
        $_SESSION['user'] = $user;
        $_SESSION['startMini'] = true;

        header('Location: index.php?id=buy&lng=$lng&session=miniSession');
        exit();
    }
?>

<h1><?=$dict["yourAddress"][$lng]?></h1>
<?php
    if($error_accured){
        echo "<span class='wrongData'>" . $input_error . "</span>";
    }
?>
