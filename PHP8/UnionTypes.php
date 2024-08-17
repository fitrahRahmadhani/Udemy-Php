<?php

class Example
{
  public string | int $data;

  public function sample(string | int $data): string | int
  {
    if (is_string($data)) {
      return "String dengan value:  $data ";
    } else {
      return $data;
    }
  }
}

$example = new Example();
$example->data = 'string';
$example->data = 123;
