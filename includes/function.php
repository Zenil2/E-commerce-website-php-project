<?php 

    function calculateTotal(float $price, float $quatinty): float{
        return $price * $quatinty;
    }
    function calculateDiscount(float $price, float $discountParent): float{
        $discount = ($price * $discountParent) / 100;
        return $price - $discount;
    }
    function isProductAvailable(int $stock): bool{
        return $stock > 0;
    }
    function formatPrice(float $price){
        return "₹" . number_format($price, 2);
    }
?>