<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use GildedRose\Product\Action\ProductAction;

class ProductActionTest extends TestCase
{
    public function testCanIncreaseQuality(): void
    {
        $action = new ProductAction();

        $quality = $action->increaseQuality(49, 50, 1);
        $qualityMax = $action->increaseQuality(50, 50, 1);

        $this->assertSame($quality, 50);
        $this->assertSame($qualityMax, 50);
    }

    public function testCanDecreaseQuality(): void
    {
        $action = new ProductAction();

        $quality = $action->decreaseQuality(50, 1);
        $qualityMin = $action->decreaseQuality(0, 1);

        $this->assertSame($quality, 49);
        $this->assertSame($qualityMin, 0);
    }

    public function canDecreaseSellInByNumber(): void
    {
        $action = new ProductAction();

        $sellIn = $action->decreaseSellIn(20, 1);
        $this->assertSame($sellIn, 19);

        $sellInMore = $action->decreaseSellIn(20, 4);
        $this->assertSame($sellInMore, 16);
    }
}
