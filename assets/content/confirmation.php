<h1><?=$dict["thanks"][$lng]?></h1>

<?php
require("assets/php/func/product_infos.php");

echo "<div id='cartContainer'>";
$renderString = $cart->renderMail($dict, $lng, $products);
$totalPrice = $cart->getTotalPrice();


$to = $user->getEmail();
$dict_placeholder = $dict["mailSubject1"][$lng];
$subject = $dict_placeholder;

$mailContent = $dict["mailContent1"][$lng];

$message = "Hey " . $user->getUsername() . "!\n\n";
$message .= "$mailContent\n";
$message .= "-------------------------------------------------------------\n";
$message .= $renderString;
$message .= "-------------------------------------------------------------\n";
$message .= "Total: $totalPrice CHF\n";
$message .= "-------------------------------------------------------------\n\n";
$message .= "Fallen Harbor :)\n\n";

$header = "From:hafen@uber.space \r\n";
#$header .= "MIME-Version: 1.0\r\n";
#$header .= "Content-type: text/html\r\n";
//*
$retval = mail($to, $subject, $message, $header);
if ($retval == true) {

    echo "<p>" . $dict["mailConfirm"][$lng] . " " . $user->getEmail() . "</p>";
} else {
    $dict_placeholder = $dict["mailError"][$lng];
    echo "<p>$dict_placeholder hafen@uber.space</p>";
}

unset($_SESSION["cart"]);
