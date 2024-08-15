<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;

// static property hanya bisa diakses langsung tanpa instansiasi class
echo MathHelper::$name;

MathHelper::$name = "Sum";

echo MathHelper::$name;

// static method hanya bisa diakses langsung tanpa instansiasi class
echo MathHelper::sum(10, 10, 10);
