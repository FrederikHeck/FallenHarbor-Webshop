<h1><?=$dict["shop"][$lng]?></h1>
<?php require("assets/php/shopnav.php") ?>
<?php include("assets/php/products.php");
foreach($products as $product){ if ($product[1] == "shirt")
    echo "<img class=\"product\" src=\"$product[3]\" alt=\"$product[0]\" />";
}?>
