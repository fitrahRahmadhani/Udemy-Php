<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $file_name = $_FILES["file"]["name"];
  $file_type = $_FILES["file"]["type"];
  $file_size = $_FILES["file"]["size"];
  $file_tmp_name = $_FILES["file"]["tmp_name"];
  $file_error = $_FILES["file"]['error'];
  move_uploaded_file($file_tmp_name, __DIR__ . "/files/$file_name");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload File</title>
</head>

<body>
  <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
    <h1>File Details</h1>
    <table>
      <tr>
        <td>Name:</td>
        <td><?= $file_name ?></td>
      </tr>
      <tr>
        <td>Type:</td>
        <td><?= $file_type ?></td>
      </tr>
      <tr>
        <td>Size:</td>
        <td><?= $file_size ?></td>
      </tr>
      <tr>
        <td>Temp Name:</td>
        <td><?= $file_tmp_name ?></td>
      </tr>
      <tr>
        <td>Error:</td>
        <td><?= $file_error ?></td>
      </tr>
    </table>
  <?php } ?>
  <h1>Form Upload</h1>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <label for="file">File:
      <input type="file" name="file" id="file">
    </label>
    <br>
    <input type="submit" value="Upload">
  </form>
</body>

</html>