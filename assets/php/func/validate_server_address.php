<?php
//todo: possible improvements:
//save user data in html as array with same name -> just loop in this document
//

// define variables and set to empty values
$firstname = $lastname = $email = $street = $street_number = $city = $postal = $country = "";
$input_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $input_error = check_empty($input_error, "firstname",  $dict, $lng);

  $lastname = test_input($_POST["lastname"]);
  $input_error = check_empty($input_error, "lastname",  $dict, $lng);

  $email = test_input($_POST["email"]);
  $input_error = check_empty($input_error, "email",  $dict, $lng);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $input_error = $dict["input_error"][$lng];
}

  $street = test_input($_POST["street"]);
  $input_error = check_empty($input_error, "street",  $dict, $lng);

  $street_number = test_input($_POST["street_number"]);
  $input_error = check_empty($input_error, "street_number",  $dict, $lng);

  $city = test_input($_POST["city"]);
  $input_error = check_empty($input_error, "city",  $dict, $lng);

  $postal = test_input($_POST["postal"]);
  $input_error = check_empty($input_error, "postal",  $dict, $lng);

  $country = test_input($_POST["country"]);
  $input_error = check_empty($input_error, "country",  $dict, $lng);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function check_empty($input_error, $data, $dict, $lng) {

    if (empty($_POST[$data])) {
        $input_error = $dict["input_error"][$lng];
    }

    return $input_error;
}
?>
