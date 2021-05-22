<?php

declare(strict_types=1);

namespace GildedRose\Product;

/**
 * ProductAction class
 */
class ProductAction
{    
    /**
     * increaseQuality - Increase quality method
     *
     * @param  int $quality
     * @param  int $maxQuality
     * @param  int $number
     * @return int
     */
    public function increaseQuality(int $quality, int $maxQuality, int $number): int
    {
        return $quality < $maxQuality ? $quality + $number : $quality;
    }
    
    /**
     * decreaseQuality - Decrease quality method
     *
     * @param  int $quality
     * @param  int $number
     * @return int
     */
    public function decreaseQuality(int $quality, int $number): int
    {
        return $quality > 0 ? $quality - $number : $quality;
    }
    
    /**
     * decreaseSellIn - Decrease sell_in method
     *
     * @param  int $sellIn
     * @param  int $number
     * @return int
     */
    public function decreaseSellIn(int $sellIn, int $number): int
    {
        return $sellIn - $number;
    }
}
