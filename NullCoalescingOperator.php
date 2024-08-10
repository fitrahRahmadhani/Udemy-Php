<?php

$data = [
  "action" => "create"
];

// block kode di bawah ini bisa diganti dengan Null Coalescing Operator
// if (isset($data["action"])) {
//   $action = $data["action"];
// } else {
//   $action = "nothing";
// }

// Null Coalescing Operator
$action = $data["action"] ?? "nothing";
