<?php

declare(strict_types=1);

require_once __DIR__ . '../vendor/autoload.php';

use GildedRose\Item;
use GildedRose\GildedRose;
use GildedRose\GildedRose2;

$items = [
    // new Item('+5 Dexterity Vest', 10, 20),
    // new Item('Aged Brie', 2, 0),
    // new Item('Elixir of the Mongoose', 5, 7),
    // new Item('Sulfuras, Hand of Ragnaros', 0, 80),
    // new Item('Sulfuras, Hand of Ragnaros', -1, 80),
    // new Item('Backstage passes to a TAFKAL80ETC concert', 15, 20),
    // new Item('Backstage passes to a TAFKAL80ETC concert', 10, 49),
    // new Item('Backstage passes to a TAFKAL80ETC concert', 5, 49),
    // this conjured item does not work properly yet
    new Item('Conjured Mana Cake', 3, 6),
];

$app = new GildedRose2($items);

for ($i = 0; $i <= 30; $i++) {
    echo "-------- day ${i} --------" . PHP_EOL;
    echo 'name, sellIn, quality' . PHP_EOL . '<br/>';
    foreach ($items as $item) {
        echo $item . PHP_EOL . '<br/><br/>';
    }
    echo PHP_EOL;
    $app->updateQuality();
}
