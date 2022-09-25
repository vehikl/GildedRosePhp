<?php

namespace App;

use PHPUnit\Framework\TestCase;
use Spatie\Snapshots\MatchesSnapshots;

class GildedRoseTest extends TestCase
{
    use MatchesSnapshots;

    /** @test */
    public function it_tests_snapshot()
    {
        $this->assertMatchesSnapshot($this->generateSnapshot());
    }

    function generateSnapshot(int $days = 50): string
    {
        $snapshot = "Report:\n";

        $items = [
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
        ];

        $app = new GildedRose($items);

        for ($i = 0; $i < $days; $i++) {
            $snapshot .= "-------- day $i --------\n";
            $snapshot .= "name, sellIn, quality\n";
            foreach ($items as $item) {
                $snapshot .= $item . PHP_EOL;
            }
            $snapshot .= "\n";
            $app->updateQuality();
        }

        return $snapshot;
    }
}
