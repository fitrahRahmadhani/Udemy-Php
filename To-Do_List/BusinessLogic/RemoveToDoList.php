<?php

function removeToDoList($id): bool
{
  global $todoList;

  if ($id > sizeof($todoList)) {
    return false;
  }

  for ($i = $id; $i < sizeof($todoList); $i++) {
    $todoList[$i] = $todoList[$i + 1];
  }

  unset($todoList[sizeof($todoList)]);

  return true;
}
