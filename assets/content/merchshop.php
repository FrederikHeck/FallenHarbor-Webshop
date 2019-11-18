<h1><?=$dict["shop"][$lng]?></h1>
<?php
    require("assets/php/func/product_infos.php");
    require("assets/php/text/shopnav.php");
    $id = "product";
    $products->renderMerch($id, $lng);
?>
