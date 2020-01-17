<?php
require("ajax_init.php");

//this file checks if a per GET passed username does exist yet in the DB

$username = isset($_GET['username']) ? $_GET['username'] : "";
if ($username == "") {
    echo "false";
    exit;
}
else{
    $username= htmlspecialchars($username);
    $user = User::getUserByUsername($username);
    if ($user == null) {
        //username doesn't exist yet
        echo "true";
        exit;
    }
    else {
        echo "false";
        exit;
    }
}
