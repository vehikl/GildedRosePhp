<?php

namespace App;

final class GildedRose {

    private $items = [];

    public function __construct($items) {
        $this->items = $items;
    }

    public function updateQuality() {
        foreach ($this->items as $item) {
            if($item->name === "Aged Brie") {
                $this->updateAgedBrie($item);
                continue;
            }

            if ($item->name === 'Backstage passes to a TAFKAL80ETC concert') {
                $this->updateBackstagePass($item);
                continue;
            }

            if ($item->name === 'Sulfuras, Hand of Ragnaros') {
                $this->updateSulfuras($item);
                continue;
            }

            $this->updateItem($item);
        }
    }

    /**
     * @param $item
     */
    protected function updateItem($item): void
    {
        if ($item->quality > 0) {
            $item->quality = $item->quality - 1;
        }

        $item->sell_in = $item->sell_in - 1;

        if ($item->sell_in < 0) {
            if ($item->quality > 0) {
                $item->quality = $item->quality - 1;
            }
        }
    }

    /**
     * @param $item
     */
    protected function updateAgedBrie($item): void
    {

        if ($item->quality < 50) {
            $item->quality = $item->quality + 1;
        }

        $item->sell_in = $item->sell_in - 1;

        if ($item->sell_in < 0) {
            if ($item->quality < 50) {
                $item->quality = $item->quality + 1;
            }
        }
    }

    private function updateBackstagePass($item)
    {

        if ($item->quality < 50) {
            $item->quality = $item->quality + 1;
            if ($item->sell_in < 11) {
                if ($item->quality < 50) {
                    $item->quality = $item->quality + 1;
                }
            }
            if ($item->sell_in < 6) {
                if ($item->quality < 50) {
                    $item->quality = $item->quality + 1;
                }
            }
        }

        $item->sell_in = $item->sell_in - 1;

        if ($item->sell_in < 0) {
            $item->quality = $item->quality - $item->quality;
        }
    }

    private function updateSulfuras($item)
    {

    }
}

