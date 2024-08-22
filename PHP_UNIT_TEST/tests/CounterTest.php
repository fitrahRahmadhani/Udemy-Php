<?php

namespace App\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
  public function testCounter()
  {
    $counter = new Counter();
    $counter->increment();
    Assert::assertEquals(1, $counter->getCounter());
  }
  /** @test */
  public function increment()
  {
    $counter = new Counter();
    $counter->increment();
    Assert::assertEquals(1, $counter->getCounter());
  }
  public function testFirst(): Counter
  {
    $counter = new Counter();
    $counter->increment();
    Assert::assertEquals(1, $counter->getCounter());
    return $counter;
  }

  /** @depends testFirst */
  public function testSecond(Counter $counter): void
  {
    $counter->increment();
    Assert::assertEquals(2, $counter->getCounter());
  }

  /** @dataProvider mathSumData */
  public function testDataProvider(array $value, int $expected): void
  {
    Assert::assertEquals($expected, Math::sum($value));
  }

  public function mathSumData(): array
  {
    return [
      [[1, 2, 3], 6],
      [[1, 2], 3],
      [[1, 1, 2], 4]
    ];
  }

  /** @testWith [[1, 2, 3],6]
   *            [[1, 2], 3]
   *            [[1, 1, 2], 4]
   */
  public function testWith(array $values, int $expected): void
  {
    Assert::assertEquals($expected, Math::sum($values));
  }
}
