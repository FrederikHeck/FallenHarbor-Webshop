<script src="assets/js/validate_client_address.js"></script>
<script src="assets/js/validate_client_account.js"></script>

<?php
//Should a user be created?
$createUser = isset($_GET['createUser']) ? true : false;
if($createUser) {
    require("assets/php/func/validate_server_account.php");
    if (isset($validationOkay) && $validationOkay) {
        require("assets/php/func/create_user.php");
        if ($successful_registration && !$usernameExists) {
            header("Location: index.php?id=validate_account&lng=$lng");
            exit;
        }
    }
    else $successful_registration = false;
}
?>

<h1><?=$dict["you"][$lng]?></h1>
<?php if($createUser && !$successful_registration)
    echo "<p class='wrongComb'>".$dict['badRegistration'][$lng]."</p>"
?>
<form action="<?="index.php?id=registration&lng=$lng&createUser=true";?>" method="post">

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
<p class="paddingTop"><a class="subtleLink" href=<?="index.php?id=login&lng=$lng"?>><?=$dict["hasAccount"][$lng]?></a></p>
