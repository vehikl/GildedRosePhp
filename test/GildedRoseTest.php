<?php

namespace App;

require __DIR__;
use PHPUnit\Framework\TestCase;

class GildedRoseTest extends TestCase {
    /** @test */
    public function it_tests_snapshot()
    {

    }
    public function testFoo() {
        $items      = [new Item("foo", 0, 0)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals("fixme", $items[0]->name);
    }
}
