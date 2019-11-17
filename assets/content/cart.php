<h1><?=$dict["cart"][$lng]?></h1>

<?php
    if (isset($_POST["itemID"]) && $_POST["itemFormat"] && $_GET["cartTag"]) { # if a user just changed the number of an item in cart
        $itemID = $_POST["itemID"];
        $itemFormat = $_POST["itemFormat"];
        $cartTag = $_GET["cartTag"];
        $cart->updateItem("$itemID", $cartTag, $itemFormat);
        $_SESSION["cart"] = $cart;
}
    require("assets/php/product_infos.php");
    require("assets/php/products.php");
    $totalPrice = $cart->render($dict, $lng, $products);
    if($totalPrice !== false) echo "<h3>Total-".$dict['price'][$lng].": $totalPrice CHF</h3>"
        . "<a href='index.php?id=registration&lng=$lng'><button class='checkoutBtn'>".$dict["buy"][$lng]."</button></a>";
?>



