<?php
    session_start();

    $session = isset($_GET['session']) ? $_GET['session'] : '';
    if($session === 'start'){
        $_SESSION['user'] = isset($_POST['username']) ? $_POST['username'] : 'Dagobert';
        $_SESSION['start'] = true;
    }

    $sessionRunning = isset($_SESSION['start']) ? $_SESSION['start'] : false;