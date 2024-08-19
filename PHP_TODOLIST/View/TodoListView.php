<?php

namespace View {

  use Service\TodoListService;
  use Helper\InputHelper;

  class TodoListView
  {
    private TodoListService $todoListService;

    public function __construct(TodoListService $todoListService)
    {
      $this->todoListService = $todoListService;
    }

    function showTodoList(): void
    {
      while (true) {
        $this->todoListService->showTodoList();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah ToDo" . PHP_EOL;
        echo "2. Hapus ToDo" . PHP_EOL;
        echo "X. Keluar" . PHP_EOL;

        $pilihan = trim(InputHelper::input("Pilih"));
        if ($pilihan == "1") {
          $this->addToDoList();
        } else if ($pilihan == "2") {
          $this->removeToDoList();
        } else if ($pilihan == "X" || $pilihan == "x") {
          break;
        } else {
          echo "Pilihan Tidak Ada" . PHP_EOL;
        }
      };
      echo "Sampai Jumpa Lagi" . PHP_EOL;
    }

    function addTodoList(): void
    {
      echo "MENAMBAH TODO" . PHP_EOL;
      $todo = trim(InputHelper::input("TODO (X untuk batal)"));
      if ($todo == "x") {
        echo "Batal menambah todo" . PHP_EOL;
      } else {
        $this->todoListService->addToDoList($todo);
      }
    }

    function removeTodoList(): void
    {
      echo "MENGHAPUS TODO" . PHP_EOL;
      $pilihan = trim(InputHelper::input("Nomor (X untuk batal)"));
      if ($pilihan == "x") {
        echo "Batal menghapus todo" . PHP_EOL;
      } else {
        $this->todoListService->removeToDoList($pilihan);
      }
    }
  }
}
