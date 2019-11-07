<?php
$site = isset($_GET['id']) ? $_GET['id'] : 'home'; # Get id of the site
$lngC = isset($_COOKIE['lng']) ? $_COOKIE['lng'] : 'en'; # Get language of the page
$lngG = isset($_GET['lng']) ? $_GET['lng'] : 'null'; # Get language of the page

//Set Language Cookie
$t = time()+60*60*24*30; // expires in 30 days
if($lngC === 'en' && $lngG === 'de'){
    setcookie("lng",$lngG,$t);
    $lng = $lngG;
}
elseif($lngC === 'de' && $lngG === 'en'){
    setcookie("lng",$lngG,$t);
    $lng = $lngG;
}
else $lng = $lngC;