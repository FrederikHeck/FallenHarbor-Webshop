<h1><?=$dict["cart"][$lng]?></h1>

<?php
    require("assets/php/func/product_infos.php");

    echo "<div id='cartContainer'>";
        $cart->render($dict, $lng, $products);
        $totalPrice = $cart->getTotalPrice();
        if($totalPrice !== 0) echo "<h3>Total-".$dict['price'][$lng].": $totalPrice CHF</h3>"
            . "<a href='index.php?id=address&lng=$lng&redirection=stay'><button class='btn'>".$dict["checkout"][$lng]."</button></a>";
    echo "</div>";

?>
<script src="assets/js/cart_ajax.js"></script>
