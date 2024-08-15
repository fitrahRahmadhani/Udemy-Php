<?php

class Student
{
  public string $id;
  public string $name;
  public int $age;
  private string $sample;

  public function setSample(string $sample): void
  {
    $this->sample = $sample;
  }

  public function __clone()
  {
    $this->sample = 'cloned';
  }

  // -__toString dipanggil jika pada obejek dijadikan string (lihat file ToString.php)
  public function __toString()
  {
    return "Student id: $this->id, name: $this->name, age: $this->age";
  }

  // __invoke dipanggil ketika object dijalankan
  public function __invoke(...$argument): void
  {
    $join = join(',', $argument);
    echo "Invoke student with argument join: $join\n";
  }

  // __debugInfo() digunakan untuk debug
  public function __debugInfo(): array
  {
    return [
      "id" => $this->id,
      "name" => $this->name,
      "age" => $this->age,
      "author" => "Fitrah RA",
      "version" => "1.0.0",
      "info" => "Ini digunakan untuk debug info"
    ];
  }
}
