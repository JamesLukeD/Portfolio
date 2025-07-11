<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  // You can do whatever you want here, e.g., email, save to file or database.
  echo "Name: $name<br>";
  echo "Email: $email<br>";
  echo "Message: $message<br>";
}
?>
