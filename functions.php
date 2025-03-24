<?php
    function calPriceTax($price) {
        $taxRate = 0.1;
        return $price + $price * $taxRate;
    }

    function displayPrice($price) {
        $priceIncludedTax = calPriceTax($price);
        return $priceIncludedTax."円";
    }
?>