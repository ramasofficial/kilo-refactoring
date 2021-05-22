<?php

declare(strict_types=1);

namespace GildedRose\Product;

use GildedRose\Item;

interface ProductInterface
{    
    /**
     * __construct
     *
     * @param  Item $item
     * @return void
     */
    public function __construct(Item $item);
        
    /**
     * process - Product process function
     *
     * @return void
     */
    public function process(): void;
    
    /**
     * decreaseSellIn - Repeatable decrease sellIn function
     *
     * @return void
     */
    public function decreaseSellIn(): void;
}
