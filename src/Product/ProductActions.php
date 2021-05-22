<?php

declare(strict_types=1);

namespace GildedRose\Product;

class ProductActions
{
    public function increaseQuality($quality, $maxQuality, $number)
    {
        return $quality < $maxQuality ? $quality + $number : $quality;
    }

    public function decreaseQuality($quality, $number)
    {
        return $quality > 0 ? $quality - $number : $quality;
    }

    public function decreaseSellIn($sellIn, $number)
    {
        return $sellIn - $number;
    }
}
