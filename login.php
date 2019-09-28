<!doctype html>
<html>
    <?php require("head.php")?>
    <body>
       <?php $thissite="you"; require("nav.php") ?>
       <main>
           <h1>You</h1>
           <a href="home.php"><img class="logo" src="img/logo.png" alt="logo" /> </a>
           <?php
           $a = 2;
           $b = 3;
          if ($a > $b): ?> a is greater than b <br>
               <?php endif; ?>
       </main>
       <?php require("footer.php") ?>
    </body>
</html>
