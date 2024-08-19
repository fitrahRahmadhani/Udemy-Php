<?php


require_once __DIR__ . "/Entity/TodoList.php";
require_once __DIR__ . "/Helper/InputHelper.php";
require_once __DIR__ . "/Repository/TodoListRepository.php";
require_once __DIR__ . "/Service/TodoListService.php";
require_once __DIR__ . "/View/TodoListView.php";
require_once __DIR__ . "/Config/Database.php";

use Entity\Todolist;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;
use Config\Database;

echo "Aplikasi TODO List" . PHP_EOL;

$connection = Database::getConnection();

$todolistRepository = new TodoListRepositoryImpl($connection);

$todolistService = new TodoListServiceImpl($todolistRepository);

$todolistView = new TodoListView($todolistService);

$todolistView->showTodoList();
