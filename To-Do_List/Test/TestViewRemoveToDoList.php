<?php

require_once "../Model/Todo-List.php";
require_once "../View/ViewRemoveToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";
require_once "../BusinessLogic/ShowToDoList.php";

addToDoList("Belajar PHP");
addToDoList("Belajar HTML");

showTodoList();

viewRemoveToDoList();
