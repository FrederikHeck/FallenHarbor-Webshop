<?php
    session_start();

    $session = isset($_GET['session']) ? $_GET['session'] : '';
    if($session === 'start'){
        $_SESSION['user'] = isset($_POST['username']) ? $_POST['username'] : 'Dagobert';
        $_SESSION['start'] = true;
    }

    if($session === 'end'){
        unset($_SESSION['user']);
        $_SESSION['start'] = false;
    }

    $sessionRunning = isset($_SESSION['start']) ? $_SESSION['start'] : false;

    // Create cart on first request
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = new Cart();
    }

    // Get cart from session
    $cart = $_SESSION["cart"];
