<?php

class Student
{
  public string $id;
  public string $name;
  public int $value;
  private string $sample;

  public function setSample(string $sample): void
  {
    $this->sample = $sample;
  }

  // gunakan  --clone untuk menghapus properti
  public function __clone()
  {
    unset($this->sample);
  }
}
