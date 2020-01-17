<?php
class Cart
{
// Holds the items: id => num
    private $items = [];
    private $totalPrice;

    #add or remove items
    public function updateItem($item, $num, $format)
    {
        if (!isset($this->items[$item][$format])) {
            $this->items[$item][$format] = 0;
        }

        $this->items[$item][$format] += $num;

        if ($this->items[$item][$format] <= 0) #checks if at least 1 product of this format is left
            unset($this->items[$item][$format]); #if no: unset

        $count = 0; #checks if there is at least 1 product of any format left
        foreach ($this->items[$item] as $item) $count++; #...by counting how many format indices are set
        if ($count === 0) unset($this->items[$item]); #if no: unset

    }

    public function getItems()
    {
        return $this->items;
    }

    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    public function isEmpty()
    {
        return count($this->items) == 0;
    }

    public function render($dict, $lng, $products)
    {
        echo "<input class='hiddenLng' type='hidden' name='hiddenLng' value=$lng>"; #for ajax request

        if ($this->isEmpty()) {
            echo "<div class=\"cart empty\">" . $dict['cartEmpty'][$lng] . "</div>";
            $this->totalPrice = 0;
            return false; #cart is empty
        } else {
            $totalPrice = 0;
            echo "<div class=\"cart\">";
            foreach ($this->items as $itemID => $itemFormats) {
                $item = $products->getProduct($itemID);
                echo "<div class='cartProduct'>";
                foreach ($itemFormats as $format => $num) {
                    $item->renderIMG("cartProduct");

                    # Product-infos
                    echo "<div class='productInformation'>"
                        . "<p>" . $item->getName() . "</p>"
                        . "<p>Format: $format</p>"
                        . "<p>" . $dict['price'][$lng] . ": " . $item->getPrice($format) . " CHF</p>"
                        . "<p>" . $dict['quantity'][$lng] . ": $num</p>";

                    $totalPrice = $totalPrice + $item->getPrice($format) * $num; #update total Price

                    # Product-buttons: These infos will be written out by js and transmitted via ajax request, to
                    # make a smooth content reload
                    echo "<form class='inline'>"
                        . "<input class='item' type='hidden' name='itemID' value=$itemID>"
                        . "<input class='format' type='hidden' name='itemFormat' value=$format>"
                        . "<button class='btnDec cartBtn'>-</input>"
                        . "<button class='btnRmv cartBtn'>" . $dict['remove'][$lng] . "</button>"
                        . "<button class='btnInc cartBtn'>+</button>"
                        . "</form>";

                    echo "</div></div>";
                }
            }
            echo "</div>";
            $this->totalPrice = $totalPrice; #cart has products
            return true;
        }
    }

    public function renderMail($dict, $lng, $products)
    {
        if ($this->isEmpty()) {
            $this->totalPrice = 0;
            return false; #cart is empty -> ERROR (should never happen)
        } else {
            $totalPrice = 0;
            $renderString = "";
            //$renderString .= "<ul class='cart'>";
            foreach ($this->items as $itemID => $itemFormats) {
                $item = $products->getProduct($itemID);
                foreach ($itemFormats as $format => $num) {

                    # Product-infos
                    $renderString .= "$num x "
                        . $item->getName() . " ($format) - " . $item->getPrice($format) . " CHF\n";

                    $totalPrice = $totalPrice + $item->getPrice($format) * $num; #update total Price
                }
            }
            //$renderString .= "</ul>";
            $this->totalPrice = $totalPrice; #cart has products
            return $renderString;
        }
    }
}
