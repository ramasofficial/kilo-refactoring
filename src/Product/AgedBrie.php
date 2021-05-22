<?php

declare(strict_types=1);

namespace GildedRose\Product;

class AgedBrie extends DefaultProduct
{
    public const PRODUCT_NAME = 'Aged Brie';
    public const MAX_QUALITY = 50;

    public function process(): void
    {
        $sellIn = $this->item->sell_in;
        $this->decreaseSellIn();

        if($sellIn > 0) {
            $this->item->quality = $this->actions->increaseQuality($this->item->quality, self::MAX_QUALITY, 1);
            return;
        }
        
        $this->item->quality = $this->actions->increaseQuality($this->item->quality, self::MAX_QUALITY, 2);
    }
}
