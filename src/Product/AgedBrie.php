<?php

declare(strict_types=1);

namespace GildedRose\Product;

use GildedRose\Item;

class AgedBrie extends DefaultProduct
{
    public const PRODUCT_NAME = 'Aged Brie';
    public const MAX_QUALITY = 50;

    public function process(): void
    {
        if($this->item->sell_in > 0) {
            $this->item->quality = $this->actions->increaseQuality($this->item->quality, self::MAX_QUALITY, 1);
        } else {
            $this->item->quality = $this->actions->increaseQuality($this->item->quality, self::MAX_QUALITY, 2);
        }

        $this->item->sell_in = $this->actions->decreaseSellIn($this->item->sell_in, 1);
    }
}
