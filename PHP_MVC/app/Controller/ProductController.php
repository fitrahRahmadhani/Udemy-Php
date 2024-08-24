<?php

namespace App\Controller;

class ProductController
{
  public function categories(string $productId, string $categories)
  {
    echo "PRODUCT ID: " . $productId . " CATEGORIES: " . $categories;
  }
}
