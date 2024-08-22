<?php

namespace App\Test;

use PHPUnit\Framework\TestCase;

class CounterStaticTest extends TestCase
{
  public static Counter $counter;

  public static function setUpBeforeClass(): void
  {
    self::$counter = new Counter();
  }
  public function testFirst()
  {
    self::$counter->increment();
    self::assertEquals(1, self::$counter->getCounter());
  }
  public function testSecond()
  {
    self::$counter->increment();
    self::assertEquals(2, self::$counter->getCounter());
  }
  public function testThird()
  {
    self::$counter->increment();
    self::markTestIncomplete("Test Belum Selesai");
    echo "Test Test"; // tidak akan dieksekusi
  }
  public function testFour()
  {
    self::markTestSkipped("Masih ada error yang bingung");
  }
  public static function tearDownAfterClass(): void
  {
    echo "Unit Test Selesai";
  }
}
