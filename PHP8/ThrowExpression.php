<?php

function sayHelloExpressiom(?string $name)
{
  $result = $name != null ? "Hello $name" : throw new Exception("Nama tidak boleh null");
  echo $result;
}

sayHelloExpressiom(null);
