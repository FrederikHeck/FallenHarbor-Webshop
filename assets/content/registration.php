<?php require("assets/php/product_infos.php") ?>
<h1><?=$dict["you"][$lng]?></h1>
<form action="<?="index.php?id=cart&lng=$lng";?>" method="post">

    <!--hidden values -->
    <input type="hidden" name="pid" value="<?=$pid?>">
    <input type="hidden" name="product_format_index" value="<?=$product_format_index?>">

    <!--standard values-->
    <label><?=$dict["firstname"][$lng]?></label>
    <input type="text" name="firstname"/>
    <label><?=$dict["lastname"][$lng]?></label>
    <input type="text" name="lastname"/>
    <label><?=$dict["email"][$lng]?></label>
    <input type="email" name="email"/><br/>

    <!--adress values-->
    <?php
        #$shipping = isset($_GET['shipping']) ? $_GET['shipping'] : false; #at time unnecessary
        $shipping = true;
        if ($products[$pid][1]==="music"){
            if($products[$pid][2][$product_format_index]==="mp3"){
                $shipping = false;
            }
        }

        if ($shipping === true){
            $dict_placeholder = $dict["street"][$lng];
            echo "<label>$dict_placeholder</label>";
            echo "<input type=\"text\" name=\"street\" value=\"$dict_placeholder\">";

            $dict_placeholder = $dict["house_number"][$lng];
            echo "<label>$dict_placeholder</label>";
            echo "<input type=\"text\" name=\"house_number\"/>";

            $dict_placeholder = $dict["city"][$lng];
            echo "<label>$dict_placeholder</label>";
            echo "<input type=\"text\" name=\"city\"/>";

            $dict_placeholder = $dict["postal"][$lng];
            echo "<label>$dict_placeholder</label>";
            echo "<input type=\"text\" name=\"postal\"/>";

            $dict_placeholder = $dict["country"][$lng];
            echo "<label>$dict_placeholder</label>";
            echo "<input type=\"text\" name=\"country\"/>";
        }
    ?>
    <input type="submit" value=<?=$dict["order"][$lng]?>>
</form>
