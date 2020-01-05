<?php require("assets/php/func/product_infos.php") ?>
<?php
# todo: option for creating account (i.e. with checkbox)

//if the user already has a session he will be redirected to the buy site immediately
$redirection = isset($_GET['redirection']) ? $_GET['redirection'] : "";

 if(($sessionRunning || $miniSessionRunning) && $redirection != "change"){
     header("Location: index.php?id=buy&lng=$lng");
     exit;
 }
?>

<!--validate on server and client side -->
<?php require("assets/php/func/validation_handler.php") ?>

<form action="<?php echo htmlspecialchars("index.php?id=address");?>" method="post">

    <!--hidden values -->
    <input type="hidden" name="pid" value="<?=$pid?>">
    <input type="hidden" name="product_format_index" value="<?=$product_format_index?>">

    <?php require("assets/php/text/input_address.php") ?>
    <!-- Option to create an account -->

    <button class="btn"><?=$dict["next"][$lng]?></button>
</form>
<form action="<?="index.php?id=buy&lng=$lng&session=start";?>" method="post">
    <div class="boxBackground">
        <p><?=$dict["orLogin"][$lng]?></p>
        <?php require("assets/php/text/input_login.php") ?>
        <button class="cartBtn"><?=$dict["next"][$lng]?></button>
    </div>
    <!-- Fancy Login Action -->
</form>
