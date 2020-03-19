<?php

namespace App;

use PHPUnit\Framework\TestCase;

require __DIR__ . '/../fixtures/texttest_fixture.php';

class GildedRoseTest extends TestCase {
    /** @test */
    public function it_tests_snapshot()
    {
        tacos();
    }

    public function testFoo() {
        $items      = [new Item("foo", 0, 0)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals("fixme", $items[0]->name);
    }
}
