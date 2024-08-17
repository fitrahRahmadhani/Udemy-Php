<?php

namespace Service {

  use Entity\TodoList;
  use Repository\TodoListRepository;

  interface TodoListService
  {
    function showTodoList();

    function addTodoList(string $todo): void;

    function removeTodoList(int $number): void;
  }

  class TodoListServiceImpl implements TodoListService
  {
    private TodoListRepository $todoListRepository;

    public function __construct(TodoListRepository $todolistRepository)
    {
      $this->todoListRepository = $todolistRepository;
    }

    public function showTodoList(): void
    {
      echo "TODOLIST" . PHP_EOL;
      $todoList = $this->todoListRepository->findAll();
      foreach ($todoList  as $number => $value) {
        echo "$number. " . $value->getTodo() . PHP_EOL;
      }
    }

    public function addTodoList(string $todo): void
    {
      $todoList = new TodoList($todo);
      $this->todoListRepository->save($todoList);
      echo "SUKSES MENAMBAH TODOLIST" . PHP_EOL;
    }

    public function removeTodoList(int $number): void
    {
      if ($this->todoListRepository->remove($number)) {
        "SUKSES MENGHAPUS TODOLIST" . PHP_EOL;
      } else {
        "GAGAL MENGHAPUS TODOLIST" . PHP_EOL;
      }
    }
  }
}
