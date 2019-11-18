<h1><?=$dict["cart"][$lng]?></h1>

<?php
    if (isset($_POST["itemID"]) && $_POST["itemFormat"] && $_POST["updateAmount"]) { # if a user just changed the number of an item in cart
        $itemID = $_POST["itemID"];
        $itemFormat = $_POST["itemFormat"];
        $updateAmount = $_POST["updateAmount"];
        $cart->updateItem("$itemID", $updateAmount, $itemFormat);
        $_SESSION["cart"] = $cart;
}
    require("assets/php/func/product_infos.php");

    $totalPrice = $cart->render($dict, $lng, $products);
    if($totalPrice !== false) echo "<h3>Total-".$dict['price'][$lng].": $totalPrice CHF</h3>"
        . "<a href='index.php?id=address&lng=$lng'><button class='btn'>".$dict["buy"][$lng]."</button></a>";
?>



