<?php
class Music_product {
    private $name;
    private $category; # music or merch
    private $tags; # lp, ep, single, poster, shirt, hoodie ...
    private $formats = []; # options like t-shirt size and album format
    private $img_link;
    private $id;

    function __construct($name, $category, $formats, $link, $id, $tag = ""){
        $this->name = $name;
        $this->category = $category;
        $this->formats = $formats;
        $this->img_link = "assets/img/$link";
        $this->id = $id;
        $this->tags = $tag;
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
        return $this->img_link;
    }

    public function getId(){
        return $this->id;
    }

    public function getPrice($format){
        if ($format === "mp3") return 10;
        if ($format === "CD") return 20;
        if ($format === "Vinyl") return 30;
        foreach($this->tags as $tag){
            if ($tag === "free") return "free - 0";
            if ($tag === "shirt") return 30;
            if ($tag === "poster") return 20;
        }
        return 0;
    }

    public function renderIMG($class = "product"){
        echo "<img class=$class src=\"$this->img_link\" alt=\"$this->name\"/>";
    }
}