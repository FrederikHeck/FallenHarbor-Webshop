<h1><?=$dict["you"][$lng]?></h1>
<?php
    $user = isset($_SESSION['user']) ? $_SESSION['user'] : 'Hoppla, I Couldnt find your name';
    echo "<p>Welcome $user</p>"?>
