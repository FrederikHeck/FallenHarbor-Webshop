<?php
class Products {
    private $products = array();

    function __construct(){
    }

    function createProduct($pid, $name, $category, $format, $link, $tag){
        $this->products[$pid] = new Music_product($name, $category, $format, $link, $pid, $tag);
        //$this->products[self::$id] = new Music_product($name, $category, $format, $link, self::$id);
    }

    #load products from database
    function loadAllProducts(){
        if($result = DB::doQuery("SELECT * FROM product;")) {
            while ($prd = $result->fetch_object()) {
                $formats = explode(',',$prd->formats);
                $formats = str_replace(' ', '', $formats);
                $tags = explode(',',$prd->tags);
                $tags = str_replace(' ', '', $tags);

                $this->createProduct($prd->pid, $prd->name, $prd->category, $formats, $prd->img_link, $tags);
            }
        }
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

    function getProduct($pid){
        # echo $pid;
        # echo print_r($this->products, true); # for testing
        return $this->products[$pid];
    }
}