<?php

class Data
{
  var string $first = "First";
  public string $second = "Second";
  protected string $third = "Third";
  private string $fourth = "Fourth";
}

$data = new Data();

foreach ($data as $key => $value) {
  echo "$key: $value" . PHP_EOL;
}

class Data2 implements IteratorAggregate
{
  var string $first = "First";
  public string $second = "Second";
  protected string $third = "Third";
  private string $fourth = "Fourth";

  public function getIterator(): Traversable
  {
    $array = [
      "first" => $this->first,
      "second" => $this->second,
      "third" => $this->third,
      "fourth" => $this->fourth
    ];
    return new ArrayIterator($array);
  }
}
