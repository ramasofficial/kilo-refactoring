<?php

declare(strict_types=1);

namespace GildedRose;

use Exception;
use GildedRose\Product\DexterityVest;
use GildedRose\Product\AgedBrie;
use GildedRose\Product\ElixirMongoose;
use GildedRose\Product\SulfurasHandRagnaros;
use GildedRose\Product\BackstagePasses;
use GildedRose\Product\ConjuredManaCake;

final class GildedRose
{
    /**
     * @var Item[]
     */
    private $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function updateQuality(): void
    {
        foreach ($this->items as $item) {

            switch($item->name) {
                case DexterityVest::PRODUCT_NAME:
                    $product = new DexterityVest($item);
                    break;
                case AgedBrie::PRODUCT_NAME:
                    $product = new AgedBrie($item);
                    break;
                case ElixirMongoose::PRODUCT_NAME:
                    $product = new ElixirMongoose($item);
                    break;
                case SulfurasHandRagnaros::PRODUCT_NAME:
                    $product = new SulfurasHandRagnaros($item);
                    break;
                case BackstagePasses::PRODUCT_NAME:
                    $product = new BackstagePasses($item);
                    break;
                case ConjuredManaCake::PRODUCT_NAME:
                    $product = new ConjuredManaCake($item);
                    break;
                default:
                    throw new Exception('Unknown product name: ' . $item->name);
            }

            $product->process();

        }
    }
}
