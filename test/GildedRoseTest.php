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
        generateReport();
        $this->assertMatchesFileSnapshot(__DIR__ . '/../fixtures/output.txt');
    }
}
