<?php
    $products = new Products();

    $products->createProduct("Fallen Harbor", "music", array("CD", "Vinyl","mp3"), "lp1.jpg", "lp");
    $products->createProduct("Lost in the Deep", "music", array("CD", "Vinyl","mp3"), "lp2.png", "lp");
    $products->createProduct("So viel Liebe im Raum EP", "music", array("mp3"), "ep1.jpeg", "ep");

    $products->createProduct("Grundlos Grün", "merch", array("S", "M", "L", "XL"), "shirt_grundlos_g.png", "shirt");
    $products->createProduct("Grundlos Blau", "merch", array("S", "M", "L", "XL"), "shirt_grundlos_b.png", "shirt");
    $products->createProduct("Poster", "merch", array("50x20cm"), "poster_LITD.png", "poster");

    $prices = array(
        "mp3"=>10, "CD"=>20, "Vinyl"=>30, "merch"=>30,
    );

    $trackListLITD = array(
        array("Longing", "01:23"),
        array("Dive In", "07:53"),
        array("Deep Blue", "06:42"),
        array("The Sunken City", "09:12"),
        array("Between Unknown Creatures", "05:08"),
        array("Losing the Light", "05:49"),
        array("Stay Awake", "06:23"),
        array("Lost in the Deep", "06:41"),
        array("Don't go Gentle into the Night", "01:45"),
        array("Fading Away", "08:10"),
        array("Swallowed by the Dark", "03:14"),
    );