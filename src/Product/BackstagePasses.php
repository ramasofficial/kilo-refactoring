<?php

declare(strict_types=1);

namespace GildedRose\Product;

class BackstagePasses extends DefaultProduct
{
    public const PRODUCT_NAME = 'Backstage passes to a TAFKAL80ETC concert';
    public const MAX_QUALITY = 50;

    public function process(): void
    {
        if($this->item->sell_in > 0) {
            $this->item->quality = $this->actions->increaseQuality($this->item->quality, self::MAX_QUALITY, 2);
        } else {
            $this->item->quality = 0;
        }

        $this->item->sell_in = $this->actions->decreaseSellIn($this->item->sell_in, 1);
    }
}
