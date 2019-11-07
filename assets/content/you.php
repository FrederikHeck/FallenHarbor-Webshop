<?php
    if (!$sessionRunning) { //session has not yet started
        require("assets/content/login.php");
        $id = session_id();
    }
    else {
        require("assets/content/welcome.php");
    }
