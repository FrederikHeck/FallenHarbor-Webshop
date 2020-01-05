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
else if($miniSessionRunning) { //user came from address.php and used address form
    require("assets/php/text/buy_extension.php");
    exit;
}
require("assets/content/404.php");
