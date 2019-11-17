<?php require("assets/php/autoloader.php")?>
<?php require("assets/php/cookie_handling.php")?>
<?php require("assets/php/session_handling.php")?>
<!doctype html>
<html>
    <?php require("assets/php/head.php")?>
    <body>
        <?php
        require("assets/php/functions.php"); # important functions and utilities
        require("assets/php/dictionary.php"); # dictionary for multiple languages
        require("assets/php/nav.php")
        ?>
        <main>
            <?php if ($site!== 0) include("assets/content/$site.php") ?>
        </main>
        <?php require("assets/php/footer.php") ?>
    </body>
</html>
