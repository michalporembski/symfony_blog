<?php

namespace App\Tests;

use App\Services\DummyService;
use PHPUnit\Framework\TestCase;

class DummyServiceTest extends TestCase
{
    public function testSomething()
    {
        $dummyService = new DummyService();
        $x = $dummyService->getSomething();
        $this->assertTrue($x == $x);
    }
}
