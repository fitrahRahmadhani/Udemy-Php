<?php

require_once __DIR__ . "/../Model/Todo-List.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddToDoList.php";

function viewAddToDoList()
{
  echo "MENAMBAH TODO" . PHP_EOL;
  $todo = trim(input("Todo (x untuk batal)"));
  if ($todo == "x") {
    echo "Batal menambah todo" . PHP_EOL;
  } else {
    addToDoList($todo);
  }
}
