<h1><?=$dict["shop"][$lng]?></h1>
<?php
    require("assets/php/text/shopnav.php");
    require("assets/php/func/product_infos.php");
    $id = "product";
    $products->renderMusic($id, $lng);

if (isset($_POST["pid"])) { # box that is displayed if a user just added an item to cart
    $cart->updateItem("$pid", 1, $product->getFormats()[$product_format_index]);
    $_SESSION["cart"] = $cart;
    echo "<div class='cartUpdated'>";
    echo "<h4>" . $dict["cartUpdated"][$lng] . "</h4>";
    echo "<a href='index.php?id=cart&lng=$lng'><button class='btn'>" . $dict["cart"][$lng] . "</button></a>";
    echo "</div>";
}
?>
