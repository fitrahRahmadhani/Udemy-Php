<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveToDoList.php";

function viewRemoveToDoList()
{
  echo "MENGHAPUS TO DO LIST" . PHP_EOL;

  $pilihan = trim(input("Nomor (x untuk batal)"));
  if ($pilihan == "x") {
    echo "Batal menghapus todo" . PHP_EOL;
  } else {
    $pilihan = (int)$pilihan;
    $success = removeToDoList($pilihan);

    if ($success) {
      echo "TO DO LIST BERHASIL DIHAPUS" . PHP_EOL;
    } else {
      echo "TO DO LIST GAGAL DIHAPUS" . PHP_EOL;
    }
  }
}
