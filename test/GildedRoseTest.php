<?php

namespace App;

use PHPUnit\Framework\TestCase;
use Spatie\Snapshots\MatchesSnapshots;
use Spatie\Snapshots\Drivers\TextDriver;

require __DIR__ . '/../fixtures/texttest_fixture.php';

class GildedRoseTest extends TestCase {
    use MatchesSnapshots;

    /** @test */
    public function it_tests_snapshot()
    {
        $this->assertMatchesSnapshot(generateReport(), new TextDriver());
    }
}
