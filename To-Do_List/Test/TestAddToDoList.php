<?php

require_once "../Model/Todo-List.php";
require_once "../BusinessLogic/AddToDoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar Java");
addTodoList("Belajar C++");

var_dump($todoList);
