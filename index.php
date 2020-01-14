<?php require("assets/php/func/autoloader.php") ?>
<?php $db = DB::getInstance()?>
<?php require("assets/php/func/get_user_post_data.php") ?>
<?php require("assets/php/func/cookie_handling.php") ?>
<?php require("assets/php/func/session_handling.php") ?>
<!doctype html>
<html>
    <?php require("assets/php/text/head.php") ?>
    <body>
        <?php
        require("assets/php/func/functions.php"); # important functions and utilities
        require("assets/php/func/dictionary.php"); # dictionary for multiple languages
        require("assets/php/text/nav.php")
        ?>
        <main>
            <?php if ($site!== 0) include("assets/content/$site.php") ?>
        </main>
        <?php require("assets/php/text/footer.php") ?>
    </body>
</html>
