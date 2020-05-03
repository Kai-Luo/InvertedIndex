<?php

use InvertedIndex\Reader;
use PHPUnit\Framework\TestCase;

class ManagerTest extends TestCase {

    public function testDummy()
    {
        $path = "../test.txt";
        $reader = new Reader();
        foreach ($reader->read($path) as $row) {
            var_dump($row);
        }
    }
}