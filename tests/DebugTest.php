<?php

namespace Tests;

use App\ItemClassifier;
use PHPUnit\Framework\TestCase;

class DebugTest extends TestCase
{
    public function testClassifier(): void
    {
        $itemClassifier = new ItemClassifier();
        $itemClassifier->categorize();
    }
}