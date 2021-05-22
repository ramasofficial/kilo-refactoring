<?php

declare(strict_types=1);

namespace Tests;

use GildedRose\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    public function testCanSetItem(): void
    {
        $name = 'Test';
        $sellIn = 10;
        $quality = 10;

        $item = new Item($name, $sellIn, $quality);

        $this->assertSame($item->name, $name);
        $this->assertSame($item->sell_in, $sellIn);
        $this->assertSame($item->quality, $quality);
    }
}
