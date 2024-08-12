<?php

require_once "../Model/Todo-List.php";
require_once "../BusinessLogic/AddToDoList.php";
require_once "../BusinessLogic/RemoveToDoList.php";
require_once "../BusinessLogic/ShowToDoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar Java");
addTodoList("Belajar C++");

showTodoList();

removeToDoList(10);

showTodoList();
