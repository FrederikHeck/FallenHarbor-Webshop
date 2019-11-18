<?php
require("assets/php/func/create_user.php");
if ($successful && !$usernameExists)
    require("assets/php/text/validate_account.php");
else {
    require("assets/content/registration.php");
}

