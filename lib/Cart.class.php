<?php
class Cart {
// Holds the items: id => num
    private $items = [];

    #add or remove items
    public function updateItem($item, $num, $format) {
        if (!isset($this->items[$item][$format])) {
            $this->items[$item][$format] = 0;
        }
        $this->items[$item][$format] += $num;

        if ($this->items[$item][$format] <= 0) #checks if at least 1 product of this format is left
            unset($this->items[$item][$format]); #if no: unset

        $count = 0; #checks if there is at least 1 product of any format left
        foreach ($this->items[$item] as $item) $count++; #...by counting how many format indices are set
        if($count===0) unset($this->items[$item]); #if no: unset

    }

    public function getItems() {
        return $this->items;
    }

    public function isEmpty() {
        return count($this->items) == 0;
    }

    public function render($dict, $lng, $products) {
        if ($this->isEmpty()) {
            echo "<div class=\"cart empty\">". $dict['cartEmpty'][$lng] ."</div>";
            return false; #cart is empty
        }

        else {
            $totalPrice = 0;
            echo "<div class=\"cart\">";
            foreach ($this->items as $itemID => $itemFormats) {
                $item = $products->getProduct($itemID);
                echo "<div class='cartProduct'>";
                foreach ($itemFormats as $format => $num) {
                    $item->renderIMG("cartProduct");

                    # Product-infos
                    echo "<div class='productInformation'>"
                    . "<p>". $item->getName() ."</p>"
                    . "<p>Format: $format</p>"
                    . "<p>" . $dict['price'][$lng] . ": ". $item->getPrice($format) . " CHF</p>"
                    . "<p>" . $dict['quantity'][$lng] . ": $num</p>";

                    $totalPrice = $totalPrice + $item->getPrice($format) * $num; #update total Price

                    # Product-buttons - each button has its own form for controlling the update amount
                    echo "<form class='inline' method='post' action='index.php?id=cart&lng=$lng'>"
                        . "<input type='hidden' name='updateAmount' value=-1>"
                        . "<input type='hidden' name='itemID' value=$itemID>"
                        . "<input type='hidden' name='itemFormat' value=$format>"
                        . "<button class='cartBtn'>-</button>"
                        . "</form>";
                    echo "<form class='inline' method='post' action='index.php?id=cart&lng=$lng'>"
                        . "<input type='hidden' name='updateAmount' value=-1000>"
                        . "<input type='hidden' name='itemID' value=$itemID>"
                        . "<input type='hidden' name='itemFormat' value=$format>"
                        . "<button class='cartBtn'>Remove</button>"
                        . "</form>";
                    echo "<form class='inline' method='post' action='index.php?id=cart&lng=$lng'>"
                        . "<input type='hidden' name='updateAmount' value=+1>"
                        . "<input type='hidden' name='itemID' value=$itemID>"
                        . "<input type='hidden' name='itemFormat' value=$format>"
                        . "<button class='cartBtn'>+</button>"
                        . "</form>";

                echo "</div></div>";
            }}
            echo "</div>";
            return $totalPrice; #cart has products
        }
    }
}