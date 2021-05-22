<?php

declare(strict_types=1);

namespace GildedRose\Product;

use GildedRose\Item;

class DefaultProduct implements ProductInterface
{
    protected $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
        $this->actions = new ProductAction();
    }
    
    public function process(): void
    {
        $sellIn = $this->item->sell_in;
        $this->decreaseSellIn();

        if($sellIn > 0) {
            $this->item->quality = $this->actions->decreaseQuality($this->item->quality, 1);
            return;
        }

        $this->item->quality = $this->actions->decreaseQuality($this->item->quality, 2);
    }

    public function decreaseSellIn(): void
    {
        $this->item->sell_in = $this->actions->decreaseSellIn($this->item->sell_in, 1);
    }
}
