<?php

namespace Data;

class Shape
{
  public function getCorner()
  {
    return 0;
  }
}

class Rectangle extends Shape
{
  // Override dari fungsi induk
  public function getCorner()
  {
    return 4;
  }

  // Akses ke fungsi induk
  public function getParentCorner()
  {
    return parent::getCorner();
  }
}
