<?php
//todo: possible improvements:
//save user data in html as array with same name -> just loop in this document
//

// define variables and set to empty values
$firstname = $lastname = $street = $street_number = $city = $postal = $country = ""; // optional values
$username = $email = $pw1 = $pw2 = "";
$input_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Optionale Angaben werden escaped
    $firstname = test_input($_POST["firstname"]);
    $lastname = test_input($_POST["lastname"]);
    $street = test_input($_POST["street"]);
    $street_number = test_input($_POST["street_number"]);
    $city = test_input($_POST["city"]);
    $postal = test_input($_POST["postal"]);
    $country = test_input($_POST["country"]);

    $email = test_input($_POST["email"]);
    $input_error = check_empty($input_error, "email",  $dict, $lng);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $input_error = $dict["input_error"][$lng] . "(Bad email)";
    }

    $username = test_input($_POST["username"]);
    $testUser = User::getUserByUsername($username);
    if ($testUser != null) {
        $input_error = $dict["input_error"][$lng] . "(Username already in use)";
    }

    //todo: improve
    $pw1 = test_input($_POST['pw1']);
    if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}$/', $pw1))
        $input_error = $dict["input_error"][$lng] . "(Bad password)";

    $pw2 = test_input($_POST['pw2']);
    $input_error = check_empty($input_error, "pw2",  $dict, $lng);

    if($pw1 != $pw2)
        $input_error = $dict["input_error"][$lng] . "(Passwords don't match)";

    $validationOkay = true;
    if ($input_error != ""){
        $validationOkay = false;
    }

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function check_empty($input_error, $data, $dict, $lng) {

    if (empty($_POST[$data])) {
        $input_error = $dict["input_error"][$lng] . "(Missing fields)";
    }

    return $input_error;
}
?>
