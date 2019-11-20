<?php
require("ajax_init.php");
//Get Data from GET
$itemID = isset($_GET['itemID']) ? $_GET['itemID'] : "LEER1";
$format = isset($_GET['format']) ? $_GET['format'] : "LEER2";
$updateAmount = isset($_GET['updateNum']) ? $_GET['updateNum'] : "LEER3";
$lng = isset($_GET['lng']) ? $_GET['lng'] : "LEER4";

$cart->updateItem("$itemID", $updateAmount, $format);
$_SESSION["cart"] = $cart;

$cart->render($dict, $lng, $products);

$totalPrice = $cart->getTotalPrice();
if($totalPrice !== 0) echo "<h3>Total-".$dict['price'][$lng].": $totalPrice CHF</h3>"
    . "<a href='index.php?id=address&lng=$lng'><button class='btn'>".$dict["buy"][$lng]."</button></a>";