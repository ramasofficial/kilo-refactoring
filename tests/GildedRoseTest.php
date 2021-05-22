<?php

declare(strict_types=1);

namespace Tests;

use GildedRose\Item;
use GildedRose\GildedRose;
use PHPUnit\Framework\TestCase;
use GildedRose\Exception\UnknownProductException;

class GildedRoseTest extends TestCase
{
    public function testUnknownProductException(): void
    {
        $this->expectExceptionMessage('Unknown product name');
        $this->expectException(UnknownProductException::class);

        $items = [new Item('foo', 0, 0)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
    }

    public function testDayOneAndLastIsSame(): void
    {
        $data = include __DIR__ . '/__fixtures__/data.php';

        $lastDay = 30;

        foreach ($data[0] as $key => $value) {
            $items = [new Item($value['name'], $value['sellIn'], $value['quality'])];
            $gildedRose = new GildedRose($items);

            for ($i = 1; $i <= $lastDay; $i++) {
                $gildedRose->updateQuality();

                if ($i === $lastDay) {
                    $this->assertSame($data[$lastDay][$key]['name'], $items[0]->name);
                    $this->assertSame($data[$lastDay][$key]['sellIn'], $items[0]->sell_in);
                    $this->assertSame($data[$lastDay][$key]['quality'], $items[0]->quality);
                }
            }
        }
    }
}
