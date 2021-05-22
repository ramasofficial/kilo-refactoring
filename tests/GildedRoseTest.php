<?php

declare(strict_types=1);

namespace Tests;

use GildedRose\GildedRose;
use GildedRose\Item;
use PHPUnit\Framework\TestCase;

class GildedRoseTest extends TestCase
{
    // public function testFoo(): void
    // {
    //     $items = [new Item('foo', 0, 0)];
    //     $gildedRose = new GildedRose2($items);
    //     $gildedRose->updateQuality();
    //     $this->assertSame('fixme', $items[0]->name);
    // }

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
