<?php
if($sessionRunning) {
    require("assets/php/text/buy_extension.php");
    exit;
}

if ($session=="start" && !$sessionRunning) { //user came form address.php and typed in wrong login combo
    require("assets/content/login.php");
    $id = session_id();
    exit;
}
if($session=="startMiniSession") { //user came from address.php and used address form
    #create temp-user from post, save it in a session var
    require("assets/php/text/buy_extension.php");
    exit;
}
require("assets/content/404.php");

