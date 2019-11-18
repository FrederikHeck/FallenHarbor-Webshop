<h1><?=$dict["you"][$lng]?></h1>
<?php
    $user = isset($_SESSION['user']) ? $_SESSION['user'] : 'Hoppla, I Couldnt find your name';
    echo "<p>". $dict["welcome"][$lng] . " ". $user->getUsername()."</p>";
    echo "<a href='index.php?id=login&lng=$lng&session=end'><button class='btn'>" . "Logout" . "</button></a>";
?>

