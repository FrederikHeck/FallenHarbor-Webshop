<h1><?=$dict["thanks"][$lng]?></h1>

<?php
    $to = $user->getEmail();
    $dict_placeholder = $dict["mailSubject"][$lng];
    $subject = $dict_placeholder;

    $mailContent = $dict["mailContent1"][$lng];

    $message = "Hey $username!\n\n";
    $message .= "$mailContent\n\n";
    $message .= "Fallen Harbor :)\n\n";

    $header = "From:hafen@uber.space \r\n";
    #$header .= "MIME-Version: 1.0\r\n";
    #$header .= "Content-type: text/html\r\n";
    //*
    $retval = mail ($to,$subject,$message,$header);
    if( $retval == true ) {

        echo "<p>" .$dict["mailConfirm"][$lng] . " " . $user->getEmail() ."</p>";
    } else {
        $dict_placeholder = $dict["mailError"][$lng];
        echo "<p>$dict_placeholder hafen@uber.space</p>";
    }
    //*/
?>
