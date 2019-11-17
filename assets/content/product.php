<?php
    require("assets/php/database_setup.php");
    require("assets/php/products.php");
    require("assets/php/product_infos.php");
?>
<h1><?=$dict["shop"][$lng]?></h1>
<?php
    require("assets/php/shopnav.php");
    echo "<h2>$productName</h2>";
    if ($productCategory === "music"){
        require("assets/php/trackList.php");
    }
    else
        $product->renderIMG();
?>

    <form action=<?="index.php?id=musicshop&lng=$lng&pid=$pid"?> method="post">

        <!-- hidden values -->
        <input type="hidden" name="pid" value="<?=$pid?>">
        <input type="hidden" name="product_format_index" value="<?=$product_format_index?>">

        <p>
            <label>Medium: </label>
            <select name="product_format_index">
                <?php
                    $i=0;
                    foreach($productFormats as $product_format){
                        echo "<option value=\"$i\">$product_format</option>";
                        $i++;
                    }
                ?>
            </select>
        </p>
        <p>
            <?=$product_price?> CHF
            <input type="submit" class="checkoutBtn" value=<?=$dict["buy"][$lng]?> >
        </p>
    </form>

    <script>
        $("h4.trackListTitle").click(function(){
            $(".trackList").toggle(1000);
        });
    </script>