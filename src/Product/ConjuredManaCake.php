<?php

declare(strict_types=1);

namespace GildedRose\Product;

use GildedRose\Item;

class ConjuredManaCake extends DefaultProduct
{
    public const PRODUCT_NAME = 'Conjured Mana Cake';
    public const MAX_QUALITY = 50;

    public function process(): void
    {
        if($this->item->sell_in > 0) {
            $this->item->quality = $this->actions->decreaseQuality($this->item->quality, 2);
        } else {
            $this->item->quality = $this->actions->decreaseQuality($this->item->quality, 4);
        }

        $this->item->sell_in = $this->actions->decreaseSellIn($this->item->sell_in, 1);
    }
}
