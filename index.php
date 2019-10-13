<!doctype html>
<html>
    <?php require("assets/php/head.php")?>
    <body>
        <?php
            $site = isset($_GET['id']) ? $_GET['id'] : 'home'; # Get id of the site
            $lng = isset($_GET['lng']) ? $_GET['lng'] : 'en'; # Get language of the page
            require("assets/php/dictionary.php"); # dcitionary for multiple languages
            require("assets/php/functions.php"); # important functions and utilities
            require("assets/php/nav.php")
        ?>
        <main>
            <?php if ($site!== 0) include("assets/content/$site.php") ?>
        </main>
        <?php require("assets/php/footer.php") ?>
    </body>
</html>
