<?php
$username = isset($_POST['username']) ? $_POST['username'] : "";
$username = $db->escape_string($username);
$password = isset($_POST['password']) ? $_POST['password'] : "";
$password = $db->escape_string($password);
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : "";
$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : "";
$street = isset($_POST['street']) ? $_POST['street'] : "";
$street_number = isset($_POST['street_number']) ? $_POST['street_number'] : "";
$city = isset($_POST['city']) ? $_POST['city'] : "";
$postal = isset($_POST['postal']) ? $_POST['postal'] : "";
$country = isset($_POST['country']) ? $_POST['country'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
