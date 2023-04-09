<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['demo-message'];

  $to = "thosar.sh@northeastern.edu";
  $headers = "From: " . $email;

  mail($to, "New message from $name", $message, $headers);
?>