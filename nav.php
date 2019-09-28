<?php
#link collection
$nav = array(
    "sound"=>'sound.php',
    "home"=>'home.php',
    "word"=>'word.php',
    "musicshop"=>'musicshop.php',
    "login"=>'login.php'
);
?>

<nav>
    <ul class="nav">
        <div class="navContainerLeft">
            <div class="nCL1"><li class="nav"><a>DE</a></li></div>
            <div class="nCL2"><li class="nav">
                <a href="<?=$nav["sound"]?>" <?php if($thissite == "sound") echo "id=\"thissite\" "; ?>> Sound </a></li></div>
        </div>
        <div class="navContainerMid"><li class="navPCT">
            <a href="<?=$nav["home"]?>" ><img class="home" src="img/home.png" alt="logo" <?php if($thissite == "home") echo "id=\"thissite\" "; ?> /></a></li></div>
        <div class="navContainerRight">
            <div class="nCR1"><li class="nav">
                <a href="<?=$nav["word"]?>" <?php if($thissite == "word") echo "id=\"thissite\" "; ?>>Word</a></li></div>
            <div class="nCR2">
                <li class="nav">
                    <a href="<?=$nav["musicshop"]?>" <?php if($thissite == "shop") echo "id=\"thissite\" "; ?>>Shop</a></li>
                <li class="nav"><a href="<?=$nav["login"]?>" <?php if($thissite == "you") echo "id=\"thissite\" "; ?>>Your Harbor</a></li>
            </div>
        </div>
    </ul>
</nav>
