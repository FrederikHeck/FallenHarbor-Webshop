<h1><?=$dict["shop"][$lng]?></h1>
<?php require("assets/php/shopnav.php") ?>
<?php include("assets/php/products.php");
$id = "product";
foreach($products as $product){ if ($product[1] == "shirt")
    echo "<a href=\"index.php?id=$id&lng=$lng&pid=$product[4]\"><img class=\"product\" src=\"$product[3]\" alt=\"$product[0]\" /></a>";
}?>
