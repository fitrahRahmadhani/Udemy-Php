<?php
$numbers = $_GET['numbers'];
$total = 0;

foreach ($numbers as $number) {
  $total += $number;
}

?>
<!-- url = http://localhost:8000/get-array.php/?numbers[]=1&numbers[]=2 -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Total = <?= $total ?></h1>
</body>

</html>