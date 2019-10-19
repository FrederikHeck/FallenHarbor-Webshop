<?php
    # TO BE DONE: Ajax nachladen
    $product_price_key = $product[1]; #der key, mit dem der preis aus dem price-Array abgefragt werden kann
    if ($product_price_key === "music"){
        $product_price_key = $product[2][$product_format_index];
    }
    $product_price = $prices[$product_price_key];
?>
