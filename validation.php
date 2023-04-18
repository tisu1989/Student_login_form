<?php
// define variables and set to empty values




$name = $email = $addr = $phone = $course = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $addr = test_input($_POST["addr"]);
  $phone = test_input($_POST["phone"]);
  $course = test_input($_POST["course"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>