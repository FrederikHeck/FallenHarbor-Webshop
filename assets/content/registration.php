<?php require("assets/php/func/product_infos.php") ?>
<script src="assets/js/validate.js"></script>

<h1><?=$dict["you"][$lng]?></h1>
<?php if(isset($successful))
    echo "<p class='wrongComb'>".$dict['badRegistration'][$lng]."</p>"
?>
<form action="<?="index.php?id=complete_registration&lng=$lng";?>" method="post">

    <!--hidden values -->
    <input type="hidden" name="pid" value="<?=$pid?>">
    <input type="hidden" name="product_format_index" value="<?=$product_format_index?>">

    <?php require("assets/php/text/input_account.php") ?>
    <div class="boxBackground">
        <p>Optional:</p>
        <?php require("assets/php/text/input_address.php") ?>
    </div>

    <div><button class="btn"><?=$dict["register"][$lng]?></button></div>
</form>
<p class="paddingTop"><a class="subtleLink" href=<?="index.php?id=registration&lng=$lng"?>><?=$dict["hasAccount"][$lng]?></a></p>
