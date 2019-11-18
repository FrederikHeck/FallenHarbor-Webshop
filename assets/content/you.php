<?php
    if (!$sessionRunning) { //session has not yet started
        require("assets/content/login.php");
        $id = session_id();
    }
    else {
        if ($displayError) {
            require("assets/content/login.php");
        }

        else
            require("assets/content/welcome.php");
    }
