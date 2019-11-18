<h1><?=$dict["you"][$lng]?></h1>
<form method="post" action=<?="index.php?id=you&lng=$lng&session=start"?>>
    <?php
    if($displayError){
        echo "<p class='wrongComb'>".$dict['wrongCombination'][$lng]."</p>";
    }
    ?>
    <?php require("assets/php/text/input_login.php") ?>
    <button class="btn loginBtn">Login</button>
</form>
<div class="boxBackground marginTop">
    <p><a class="subtleLink" href=<?="index.php?id=registration&lng=$lng"?>><?=$dict["newAccount"][$lng]?></a></p>
    <p><a class="subtleLink" href=<?="index.php?id=forgotData&lng=$lng"?>><?=$dict["forgotPW"][$lng]?></a></p>
</div>