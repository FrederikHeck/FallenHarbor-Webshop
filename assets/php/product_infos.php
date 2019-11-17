<?php
    # Product infos that are passed from post or get are set here
    include("assets/php/products.php");
    $pid = isset($_GET['pid']) ? $_GET['pid'] : '0';
    if ($pid === '0'){
        $pid = isset($_POST['pid']) ? $_POST['pid'] : '0';
    }

    $product = $products->getProduct($pid);
    $productName = $product->getName();
    $productCategory = $product->getCategory();
    $productFormats = $product->getFormats();

    $product_format_index = isset($_POST['product_format_index']) ? $_POST['product_format_index'] : '0';

    # TO BE DONE: Preis mit Ajax nachladen
    $product_price_key = ($product->getFormats())[$product_format_index];
    $product_price = $product->getPrice($product_price_key);

    #also email and firstname
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
