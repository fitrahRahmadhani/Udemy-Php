<?php

require_once __DIR__ . '/../Entity/TodoList.php';
require_once __DIR__ . '/../Repository/TodoListRepository.php';
require_once __DIR__ . '/../Service/TodoListService.php';
require_once __DIR__ . '/../Entity/TodoList.php';
require_once __DIR__ . '/../View/TodoListView.php';
require_once __DIR__ . '/../Helper/InputHelper.php';

use Entity\TodoList;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

function testViewShowsTodoList(): void
{
  $todoListRepository = new TodoListRepositoryImpl();
  $todoListService = new TodoListServiceImpl($todoListRepository);
  $todoListView = new TodoListView($todoListService);

  $todoListService->addTodoList("Belajar PHP");
  $todoListService->addTodoList("Belajar PHP Database");
  $todoListService->addTodoList("Belajar Laravel");

  $todoListView->showTodoList();
}

testViewShowsTodoList();
