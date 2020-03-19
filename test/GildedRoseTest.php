<?php

namespace App;

use PHPUnit\Framework\TestCase;
use Spatie\Snapshots\MatchesSnapshots;

require __DIR__ . '/../fixtures/texttest_fixture.php';

class GildedRoseTest extends TestCase {

    use MatchesSnapshots;

    /** @test */
    public function it_tests_snapshot()
    {
        tacos();
        $this->assertMatchesFileSnapshot(__DIR__ . '/../fixtures/output.txt');
    }

    public function testFoo() {
        $items      = [new Item("foo", 0, 0)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals("fixme", $items[0]->name);
    }
}
