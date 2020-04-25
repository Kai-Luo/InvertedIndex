<?php
use PHPUnit\Framework\TestCase;

class ManagerTest extends TestCase {

    public function testDummy()
    {
        $path = "../test.txt";
        $reader = new Reader();
        $reader->read($path);
    }
}