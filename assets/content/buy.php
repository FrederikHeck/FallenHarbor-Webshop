<h3><?=$dict["cart"][$lng]?></h3>

<?php
require("assets/php/product_infos.php");
include("assets/php/products.php");

$cartEmpty = $cart->render($dict, $lng, $products);
echo "<h3>" .$dict["userInf"][$lng]. "</h3>";

# Display User Information
$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : "FIRSTNAME";
$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : "LASTNAME";
echo "<p>$firstname $lastname</p>";

if (isset($_POST['street']) === true){ #if shipping === true
    $street = isset($_POST['street']) ? $_POST['street'] : "STREET";
    $house_number = isset($_POST['house_number']) ? $_POST['house_number'] : "HOUSE NUMBER";
    echo "<p>$street $house_number</p>";

    $postal = isset($_POST['postal']) ? $_POST['postal'] : "POSTAL CODE";
    $city = isset($_POST['city']) ? $_POST['city'] : "CITY";
    echo "<p>$postal $city</p>";

    $country = isset($_POST['country']) ? $_POST['country'] : "COUNTRY";
    echo "<p>$country</p>";
}
?>
<form action="<?="index.php?id=confirmation&lng=$lng"?>" method="post">
    <!--hidden values-->
    <input type="hidden" name="pid" value="<?=$pid?>">
    <input type="hidden" name="email" value="<?=$email?>">
    <input type="hidden" name="firstname" value="<?=$firstname?>">

    <input type="hidden" name="product_format_index" value="<?=$product_format_index?>">

    <div id="dialog" title="<?=$dict["boxConfirmTitle"][$lng]?>">
        <p class="dialog"><?=$dict["boxConfirm1"][$lng]?>
            <a href="<?="index.php?id=agb&lng=$lng"?>" target="_blank"><?=$dict["agb"][$lng]?></a>
            <?=$dict["boxConfirm2"][$lng]?></p>
        <input class="dialog" type="submit" value="<?=$dict["yes"][$lng]?>" onclick="submitForm()">
    </div>
</form>
<button class="checkoutBtn"><?=$dict["buy"][$lng]?></button>

<?php require(dirname(__DIR__)."\js\confirm_order.php")?>
