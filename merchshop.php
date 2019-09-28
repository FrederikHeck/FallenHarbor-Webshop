<!doctype html>
<html>
    <?php require("head.php")?>
    <body>
       <?php $thissite="shop"; require("nav.php") ?>
       <main>
           <h1>Shop</h1>
           <?php require("shopnav.php") ?>
           <h2>Merch</h2>

           <?php include("products.php");
            foreach($products as $product){ if ($product[1] == "shirt")
                echo "<img class=\"product\" src=\"$product[3]\" alt=\"$product[0]\" />";
            }?>

       </main>
       <?php require("footer.php") ?>
    </body>
</html>
