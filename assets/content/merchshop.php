<h1><?=$dict["shop"][$lng]?></h1>
<?php require("assets/php/shopnav.php") ?>
<?php
    include("assets/php/products.php");
    $id = "product";
    $products->renderMerch($id, $lng);
?>
