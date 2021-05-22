<?php

declare(strict_types=1);

namespace GildedRose\Product;

/**
 * ConjuredManaCake product class
 */
class ConjuredManaCake extends DefaultProduct
{
    public const PRODUCT_NAME = 'Conjured Mana Cake';
    public const MAX_QUALITY = 50;

    public function process(): void
    {
        $sellIn = $this->item->sell_in;
        $this->decreaseSellIn();

        if($sellIn > 0) {
            $this->item->quality = $this->actions->decreaseQuality($this->item->quality, 2);
            return;
        }

        $this->item->quality = $this->actions->decreaseQuality($this->item->quality, 4);
    }
}
