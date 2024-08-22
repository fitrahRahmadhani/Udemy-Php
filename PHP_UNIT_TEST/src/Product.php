<?php

namespace App\Test;

class Product
{
  private string $id, $name, $description;
  private int $price, $quantity;

  // Getters
  public function getId(): string
  {
    return $this->id;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getDescription(): string
  {
    return $this->description;
  }

  public function getPrice(): int
  {
    return $this->price;
  }

  public function getQuantity(): int
  {
    return $this->quantity;
  }

  // Setters
  public function setId(string $id): void
  {
    $this->id = $id;
  }

  public function setName(string $name): void
  {
    $this->name = $name;
  }

  public function setDescription(string $description): void
  {
    $this->description = $description;
  }

  public function setPrice(int $price): void
  {
    $this->price = $price;
  }

  public function setQuantity(int $quantity): void
  {
    $this->quantity = $quantity;
  }
}
