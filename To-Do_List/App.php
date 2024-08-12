<?php

require_once __DIR__ . "/Model/Todo-List.php";
require_once __DIR__ . "/BusinessLogic/AddToDoList.php";
require_once __DIR__ . "/BusinessLogic/RemoveToDoList.php";
require_once __DIR__ . "/BusinessLogic/ShowToDoList.php";
require_once __DIR__ . "/View/ViewAddToDoList.php";
require_once __DIR__ . "/View/ViewRemoveToDoList.php";
require_once __DIR__ . "/View/ViewShowToDoList.php";
require_once __DIR__ . "/Helper/Input.php";

echo "Aplikasi TODO List" . PHP_EOL;

viewShowToDoList();
