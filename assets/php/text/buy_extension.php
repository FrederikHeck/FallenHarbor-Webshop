<h3><?=$dict["cart"][$lng]?></h3>
<?php
require("assets/php/func/product_infos.php");
$cartEmpty = $cart->render($dict, $lng, $products);
echo "<h3>" .$dict["userInf"][$lng]. "</h3>";

# Display User Information
# todo: ask for missing information
if($user->getStreet() != null){
    echo "<p>". $user->getStreet() . " " . $user->getStreetNumber() ."</p>";
}
echo "<p>" . $user->getPostal() . " " . $user->getCity() . "</p>";
echo "<p>" . $user->getCountry() . " " . "</p>";

?>
    <!-- checkout button popup -->
    <form action="<?="index.php?id=confirmation&lng=$lng"?>" method="post">
        <!--hidden values-->
        <input type="hidden" name="pid" value="<?=$pid?>">
        <input type="hidden" name="email" value="<?=$user->getEmail()?>">
        <input type="hidden" name="firstname" value="<?=$user->getFirstname()?>">

        <input type="hidden" name="product_format_index" value="<?=$product_format_index?>">

        <div id="dialog" title="<?=$dict["boxConfirmTitle"][$lng]?>">
            <p class="dialog"><?=$dict["boxConfirm1"][$lng]?>
                <a href="<?="index.php?id=agb&lng=$lng"?>" target="_blank"><?=$dict["agb"][$lng]?></a>
                <?=$dict["boxConfirm2"][$lng]?></p>
            <input class="dialog" type="submit" value="<?=$dict["yes"][$lng]?>" onclick="submitForm()">
        </div>
    </form>
    <button class="btn"><?=$dict["buy"][$lng]?></button>

<?php require("assets\js\confirm_order.php")?>