<?php

declare(strict_types=1);

namespace GildedRose\Product;

use GildedRose\Item;

interface ProductInterface
{
    public function __construct(Item $item);
    
    public function process(): void;
}
