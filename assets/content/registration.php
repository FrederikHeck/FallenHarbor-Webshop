<?php require("assets/php/product_infos.php") ?>
<script src="assets/js/validate.js"></script>

<h1><?=$dict["you"][$lng]?></h1>
<form action="<?="index.php?id=buy&lng=$lng";?>" method="post">

    <!--hidden values -->
    <input type="hidden" name="pid" value="<?=$pid?>">
    <input type="hidden" name="product_format_index" value="<?=$product_format_index?>">

    <!--standard values-->
    <p id="firstname">
        <label><?=$dict["firstname"][$lng]?></label><input type="text" name="firstname"/>
        <mark>Please enter a name!</mark>
    </p>
    <p id="lastname">
        <label><?=$dict["lastname"][$lng]?></label><input type="text" name="lastname"/>
        <mark>Please enter a name!</mark>
    </p>
    <p id="email">
        <label><?=$dict["email"][$lng]?></label><input type="email" name="email"/>
        <mark>Please enter an email!</mark>
    </p>

    <!--adress values-->
    <?php
        #$shipping = isset($_GET['shipping']) ? $_GET['shipping'] : false; #at time unnecessary
        $shipping = true;
        if ($productCategory ==="music"){
            if($productFormats[$product_format_index]==="mp3"){
                $shipping = false;
            }
        }

        if ($shipping === true){
            echo "<p id=\"street\">"
            ."<label>" .$dict["street"][$lng] ."</label><input type=\"text\" name=\"street\" value=\"Teststrasse\">"
            ."<mark>Please enter a street!</mark>"
            ."</p>";

            echo "<p id=\"house_number\">"
            ."<label>" .$dict["house_number"][$lng] ."</label>" ."<input type=\"text\" name=\"house_number\"/>"
            ."<mark>Please enter a street number!</mark>"
            ."</p>";

            echo "<p id=\"city\">"
            ."<label>" .$dict["city"][$lng] ."</label>" ."<input type=\"text\" name=\"city\"/>"
            ."<mark>Please enter a city!</mark>"
            ."</p>";

            echo "<p id=\"postal\">"
            ."<label>" .$dict["postal"][$lng] ."</label>" ."<input type=\"text\" name=\"postal\"/>"
            ."<mark>Please enter a postal code!</mark>"
            ."</p>";

            echo "<p id=\"country\">"
            ."<label>" .$dict["country"][$lng] ."</label>" ."<input type=\"text\" name=\"country\"/>"
            ."<mark>Please enter a country!</mark>"
            ."</p>";
        }
    ?>
    <input type="submit" value=<?=$dict["order"][$lng]?>>
</form>
