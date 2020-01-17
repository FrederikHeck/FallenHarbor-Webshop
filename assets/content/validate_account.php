<h1><?=$dict['welcome'][$lng] . ", " . $user->getUsername() . "!"?></h1>
<?php
$to = $user->getEmail();
$dict_placeholder = $dict["mailSubject2"][$lng];
$subject = $dict_placeholder;

$mailContent = $dict["mailContent2"][$lng];

$message = "Hey " . $user->getFirstname() . "!\n\n";
$message .= "$mailContent\n\n";
$message .= "Fallen Harbor :)\n\n";

$header = "From:hafen@uber.space \r\n";
#$header .= "MIME-Version: 1.0\r\n";
#$header .= "Content-type: text/html\r\n";
//*
$retval = mail ($to,$subject,$message,$header);
if( $retval == true ) {
    echo "<p>" . $dict['pleaseConfirm'][$lng]. "</p>";
} else {
    $dict_placeholder = $dict["mailError"][$lng];
    echo "<p>$dict_placeholder hafen@uber.space</p>";
}
//*/
?>


<img class="diver marginTop" src="assets/img/taucher.png" alt="logo" />


