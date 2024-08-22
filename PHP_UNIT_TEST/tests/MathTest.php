<?php

namespace App\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{

  public function testManual()
  {
    Assert::assertEquals(13, Math::sum([10, 3]));
  }
}
