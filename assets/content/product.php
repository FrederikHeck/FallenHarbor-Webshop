<?php
    include("assets/php/products.php");
    require("assets/php/product_infos.php");
    $pid = isset($_GET['pid']) ? $_GET['pid'] : '0';
?>
    <h1><?=$dict["shop"][$lng]?></h1>
<?php
    require("assets/php/shopnav.php");
    echo "<h2>$product[0]</h2>";
    echo "<img class=\"product\" src=\"$product[3]\" alt=\"$product[0]\" />";

    require("assets/php/product_price.php");
    echo "<p>$product_price CHF<p>";
    /* Tracklist */
?>
    <form action=<?="index.php?id=registration&lng=$lng&pid=$pid"?> method="post">
        <label>Medium: </label>
        <select name="product_format_index">
            <?php
                $i=0;
                foreach($product[2] as $product_format){
                    echo "<option value=\"$i\">$product_format</option>";
                    $i++;
                }
            ?>
        </select>
        <input type="submit" value=<?=$dict["buy"][$lng]?>></p>

        <!-- hidden values -->
        <input type="hidden" name="pid" value="<?=$pid?>">
        <input type="hidden" name="product_format_index" value="<?=$product_format_index?>">
    </form>
