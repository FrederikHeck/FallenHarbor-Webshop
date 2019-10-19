<?php # class for functions and other util information
    function echo_Anchor($class, $name, $idFlag=0){ # for menu-links
        global $thissite;
        global $nav;
        global $dict;
        global $lng;
        global $site;

        $href = $nav[$name]; #href has to be in nav-Array
        $print = $dict[$name][$lng];

        if($idFlag===1 && $site === $name){ #only for submenue shopnav
            echo "<a href=\"$href\" id=\"thisShopSite\">$print</a>";
        }
        elseif ($thissite === $name && $class === 0) {
            echo "<a href=\"$href\" id=\"thissite\">$print</a>";
        }
        elseif($thissite === $name) {
            echo "<a href=\"$href\" class=\"$class\" id=\"thissite\">$print</a>";
        }
        elseif($class === 0) {
            echo "<a href=\"$href\">$print</a>";
        }
        else{
            echo "<a href=\"$href\" class=\"$class\">$print</a>";
        }
    }

    #initializes data for multi-languages:
    $thissite = $site; #site equals the id set in index.php
    if ($site==="musicshop" || $site==="merchshop") $thissite = "shop";
    elseif ($site==="login") $thissite = "you";
    $newLng = "en";
    if ($lng==="de") $newLng="en";
    if ($lng==="en") $newLng="de";

    #link collection
    $nav = array(
        "lng"=>"index.php?id=$site&lng=$newLng",
        "sound"=>"index.php?id=sound&lng=$lng",
        "home"=>"index.php?id=home&lng=$lng",
        "word"=>"index.php?id=word&lng=$lng",
        "shop"=>"index.php?id=musicshop&lng=$lng",
        "you"=>"index.php?id=registration&lng=$lng",
        "merchshop"=>"index.php?id=merchshop&lng=$lng",
        "musicshop"=>"index.php?id=musicshop&lng=$lng",
    );
?>
