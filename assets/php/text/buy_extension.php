<h2><?=$dict["buy_final"][$lng]?></h2>
<h3><?=$dict["cart"][$lng]?></h3>
<?php
require("assets/php/func/product_infos.php");
$cartEmpty = $cart->render($dict, $lng, $products);
$totalPrice = $cart->getTotalPrice();
if($totalPrice !== 0) echo "<h3>Total-".$dict['price'][$lng].": $totalPrice CHF</h3>";


# Display User Information
echo "<h3>" .$dict["userInf"][$lng]. "</h3>";
echo "<div class='boxBackground'>";
//. "<form action='index.php?id=address&lng=$lng&redirection=change' method='post'>"; //todo: give data in a postform
echo "<p>" . $user->getFirstname() . " " . $user->getLastname() ."</p>";
echo "<p>" . $user->getEmail() . "</p>";
echo "<p>". $user->getStreet() . " " . $user->getStreetNumber() ."</p>";
echo "<p>" . $user->getPostal() . " " . $user->getCity() . "</p>";
echo "<p>" . $user->getCountry() . " " . "</p>"
. "<a class='subtleLink black' href='index.php?id=address&lng=$lng&redirection=change'>" . "Change" . "</a>"
. "</div>";

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
    <button class="btn btnBuy"><?=$dict["buy"][$lng]?></button>

<?php require("assets\js\confirm_order.php")?>
