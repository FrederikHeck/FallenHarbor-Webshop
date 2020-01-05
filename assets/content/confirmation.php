<h1><?=$dict["thanks"][$lng]?></h1>

<?php
    require("assets/php/func/product_infos.php");
    # echo "<img class=\"product\" src=\"$product[3]\" alt=\"$product[0]\" />";
?>

<?php
    $to = "fredfeierstein@web.de";
    $dict_placeholder = $dict["mailSubject"][$lng];
    $subject = $dict_placeholder;

    $mailContent = $dict["mailContent1"][$lng];

    $message = "Hey $firstname!\n\n";
    $message .= "$mailContent\n\n";
    $message .= "Fallen Harbor :)\n\n";

    #echo "$message";

    $header = "From:hafen@uber.space \r\n";
    #$header .= "MIME-Version: 1.0\r\n";
    #$header .= "Content-type: text/html\r\n";
    /*
    $retval = mail ($to,$subject,$message,$header);
    if( $retval == true ) {
        $dict_placeholder = $dict["mailConfirm"][$lng];
        echo "<p>$dict_placeholder $email</p>";
    } else {
        $dict_placeholder = $dict["mailError"][$lng];
        echo "<p>$dict_placeholder hafen@uber.space</p>";
    }
    //*/
?>
