<?php
class Products {
    private $products = array();
    public static $id = 0;

    function __construct(){
    }

    function createProduct($name, $category, $format, $link, $tag){
        $this->products[] = new Music_product($name, $category, $format, $link, self::$id, $tag);
        //$this->products[self::$id] = new Music_product($name, $category, $format, $link, self::$id);
        self::$id = self::$id + 1;
    }

    function removeProduct($id){
       unset($this->products[$id]);
    }

    function renderMusic($id, $lng){
        echo "<div class='renderedProducts'>";
        foreach ($this->products as $product){
            if ($product->getCategory() == "music") {
                $this->printProduct($product, $id, $lng);
            }
        }
        echo "</div>";
    }

    function renderMerch($id, $lng){
        foreach ($this->products as $product){
            if ($product->getCategory() == "merch") {
                $this->printProduct($product, $id, $lng);
            }
        }
    }

    private function printProduct($product, $id, $lng){
        $pid = $product->getId();
        $link = $product->getLink();
        $name = $product->getName();
        echo "<a href=\"index.php?id=$id&lng=$lng&pid=$pid\">"
                ."<img class=\"product\" src=\"$link\" alt=\"$name()\" />"
            ."</a>";
    }

    function renderByTag(){

    }

    function getProduct($pid){
        # echo $pid;
        # echo print_r($this->products, true); # for testing
        return $this->products[$pid];
    }
}