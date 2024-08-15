<?php
require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "admin";
$loginRequest->password = "admin";

try {
  validateLoginRequest($loginRequest);
} catch (ValidationException | Exception $exception) {
  echo $exception->getMessage();
  var_dump($exception->getTrace());
} finally {
  echo "Error atau tidak tetap di panggil";
}
