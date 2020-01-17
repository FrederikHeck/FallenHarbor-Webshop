<?php
    $products = new Products();
    $products->loadAllProducts();

    $trackListLITD = array(
        array("Longing", "01:23"),
        array("Dive In", "07:53"),
        array("Deep Blue", "06:42"),
        array("The Sunken City", "09:12"),
        array("Between Unknown Creatures", "05:08"),
        array("Losing the Light", "05:49"),
        array("Stay Awake", "06:23"),
        array("Lost in the Deep", "06:41"),
        array("Don't go Gentle into the Night", "01:45"),
        array("Fading Away", "08:10"),
        array("Swallowed by the Dark", "03:14"),
    );

    # Product infos that are passed from post or get are set here
    $pid = isset($_GET['pid']) ? $_GET['pid'] : '0';
    if ($pid === '0'){
        $pid = isset($_POST['pid']) ? $_POST['pid'] : '0';
    }

    $product = $products->getProduct($pid);
    $productName = $product->getName();
    $productCategory = $product->getCategory();
    $productFormats = $product->getFormats();

    $product_format_index = isset($_POST['product_format_index']) ? $_POST['product_format_index'] : '0';

    $product_price_key = $product->getFormats()[$product_format_index];
    $product_price = $product->getPrice($product_price_key);
