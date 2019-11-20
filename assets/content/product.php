<?php
    require("assets/php/func/product_infos.php");
?>
<h1><?=$dict["shop"][$lng]?></h1>
<?php
    require("assets/php/text/shopnav.php");
    echo "<h2>$productName</h2>";
    if ($productCategory === "music"){
        require("assets/php/text/trackList.php");
    }
    else
        $product->renderIMG();
     #todo: js onclick -> extra window grösseres bild

?>

    <form action=<?="index.php?id=musicshop&lng=$lng&pid=$pid"?> method="post">

        <!-- hidden values -->
        <input type="hidden" name="pid" value="<?=$pid?>">
        <input type="hidden" name="product_format_index" value="<?=$product_format_index?>">

        <p>
            <label>Medium: </label>
                <!-- todo: style-->
                <select name="product_format_index">
                    <?php
                    $i=0;
                    foreach($productFormats as $product_format){
                        $new_product_price = $product->getPrice($product_format);
                        echo "<option onclick='adjustPrice($new_product_price)' value=\"$i\">$product_format</option>";
                        $i++;
                    }
                    ?>
                </select>
        </p>
        <p>
            <div id="priceContainer"><span id="productPrice"><?=$product_price?></span> CHF</div>
            <input type="submit" class="btn" value=<?=$dict["buy"][$lng]?> >
        </p>
    </form>

    <script>
        $("h4.trackListTitle").click(function(){
            $(".trackList").toggle(1000);
        });

        function adjustPrice(newProductPrice){
            oldProductPrice = document.getElementById("productPrice").innerText;
            if (oldProductPrice != newProductPrice){
                $("#priceContainer").fadeOut(function () {
                    document.getElementById("productPrice").innerHTML = newProductPrice;
                    $("#priceContainer").fadeIn();
                });
            }
        }
    </script>