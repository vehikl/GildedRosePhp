<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\GildedRose;
use App\Item;

function tacos(int $days = 50)
{
    file_put_contents(__DIR__ . "/output.txt", "OMGHAI!\n");

    $items = array(
        new Item('+5 Dexterity Vest', 10, 20),
        new Item('Aged Brie', 2, 0),
        new Item('Elixir of the Mongoose', 5, 7),
        new Item('Sulfuras, Hand of Ragnaros', 0, 80),
        new Item('Sulfuras, Hand of Ragnaros', -1, 80),
        new Item('Backstage passes to a TAFKAL80ETC concert', 15, 20),
        new Item('Backstage passes to a TAFKAL80ETC concert', 10, 49),
        new Item('Backstage passes to a TAFKAL80ETC concert', 5, 49),
        // this conjured item does not work properly yet
        new Item('Conjured Mana Cake', 3, 6)
    );

    $app = new GildedRose($items);

    for ($i = 0; $i < $days; $i++) {
        file_put_contents(__DIR__ . "/output.txt", "-------- day $i --------\n", FILE_APPEND);
        file_put_contents(__DIR__ . "/output.txt", "name, sellIn, quality\n", FILE_APPEND);
        foreach ($items as $item) {
            file_put_contents(__DIR__ . "/output.txt", $item . PHP_EOL, FILE_APPEND);
        }
        file_put_contents(__DIR__ . "/output.txt", PHP_EOL, FILE_APPEND);
        $app->updateQuality();
    }
}
