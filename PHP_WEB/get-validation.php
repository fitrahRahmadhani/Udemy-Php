<?php
if (!isset($_GET['say']) || $_GET['say'] == '') {
  http_response_code(400);
  echo "Say is Required";
  exit();
}

$say = "Hello " . htmlspecialchars($_GET['say']);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1><?= $say ?></h1>
</body>

</html>