<?php

function showTodoList()
{
  global $todoList;
  echo "To Do List" . PHP_EOL;
  echo "============" . PHP_EOL;
  foreach ($todoList as $number => $todo) {
    echo "$number. $todo" . PHP_EOL;
  }
}
