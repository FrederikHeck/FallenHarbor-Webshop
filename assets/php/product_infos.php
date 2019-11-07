<?php
    # Product infos that are passed from post or get are set here
    include("assets/php/products.php");
    $pid = isset($_GET['pid']) ? $_GET['pid'] : '0';
    if ($pid === '0'){
        $pid = isset($_POST['pid']) ? $_POST['pid'] : '0';
    }

    $product = $products[$pid];
    $product_format_index = isset($_POST['product_format_index']) ? $_POST['product_format_index'] : '0';

    #also email and firstname
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
?>
