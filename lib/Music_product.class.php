<?php
class Music_product {
    private $name;
    private $category; # music or merch
    private $tag; # lp, ep, single, poster, shirt, hoodie ...
    private $formats = []; # options like t-shirt size and album format
    private $link;
    private $id;

    function __construct($name, $category, $formats, $link, $id, $tag = ""){
        $this->name = $name;
        $this->category = $category;
        $this->formats = $formats;
        $this->link = "assets/img/$link";
        $this->id = $id;
        $this->tag = $tag;
    }

    public function getName(){
        return $this->name;
    }

    public function getCategory(){
        return $this->category;
    }

    public function getFormats(){
        return $this->formats;
    }

    public function getLink(){
        return $this->link;
    }

    public function getId(){
        return $this->id;
    }

    public function getPrice($format){
        if ($format === "mp3") return 10;
        if ($format === "CD") return 20;
        if ($format === "Vinyl") return 30;

        if ($this->tag === "shirt") return 30;
        if ($this->tag === "poster") return 20;

        return 0;
    }

    public function renderIMG($class = "product"){
        echo "<img class=$class src=\"$this->link\" alt=\"$this->name\"/>";
    }
}