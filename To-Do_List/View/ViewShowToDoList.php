<?php

require_once __DIR__ . "/../View/ViewAddToDoList.php";
require_once __DIR__ . "/../View/ViewRemoveToDoList.php";
require_once __DIR__ . "/../View/ViewShowToDoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";

function viewShowToDoList()
{
  while (true) {
    showTodoList();

    echo "MENU" . PHP_EOL;
    echo "1. Tambah ToDo" . PHP_EOL;
    echo "2. Hapus ToDo" . PHP_EOL;
    echo "X. Keluar" . PHP_EOL;

    $pilihan = trim(input("Pilih"));
    if ($pilihan == "1") {
      viewAddToDoList();
    } else if ($pilihan == "2") {
      viewRemoveToDoList();
    } else if ($pilihan == "X" || $pilihan == "x") {
      break;
    } else {
      echo "Pilihan Tidak Ada" . PHP_EOL;
    }
  };
  echo "Sampai Jumpa Lagi" . PHP_EOL;
}
