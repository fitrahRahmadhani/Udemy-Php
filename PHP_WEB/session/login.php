<?php

session_start();

// Cek apakah sudah login
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
  header('Location: /session/member.php');
  exit();
}

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Cek apakah username dan password diisi
  if (!empty($_POST['username']) && !empty($_POST['password'])) {
    // Jika sukses login
    $_SESSION['login'] = true;
    $_SESSION['username'] = $_POST['username'];
    header('Location: /session/member.php');
    exit();
  } else {
    // Jika gagal login
    $error = "Login Gagal";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar Session</title>
</head>

<body>
  <?php if (!empty($error)) { ?>
    <p><?= htmlspecialchars($error) ?></p>
  <?php } ?>
  <h1>Login</h1>
  <form action="/session/login.php" method="post">
    <label for="username">Username:
      <input type="text" name="username" id="username" required>
    </label>
    <br>
    <label for="password">Password:
      <input type="password" name="password" id="password" required>
    </label>
    <br>
    <input type="submit" value="Login">
  </form>
</body>

</html>