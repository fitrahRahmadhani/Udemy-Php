<?php

namespace App\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
  private Person $person;

  protected function setUp(): void
  {
    $this->person = new Person("John");
  }
  public function testSuccess()
  {
    Assert::assertEquals("Hello Budi, my name is John", $this->person->sayHello("Budi"));
  }

  public function testExeption()
  {
    $this->expectException(\Exception::class);
    // $person->sayHello("Budi");  Error, ekspektasi salah tapi realita true
    $this->person->sayHello(null);
  }
  public function testGoodByeSuccess()
  {
    $this->expectOutputString("Good bye Budi" . PHP_EOL);
    $this->person->sayGoodBye("Budi");
  }
}
