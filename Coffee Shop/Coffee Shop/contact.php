<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars(trim($_POST['name']));
  $email = htmlspecialchars(trim($_POST['email']));
  $message = htmlspecialchars(trim($_POST['message']));
  $address = htmlspecialchars(trim($_POST['address']));
  $contact = htmlspecialchars(trim($_POST['contact']));
  if (empty($name) || empty($email) || empty($contact) || empty($address) || empty($message)) {
    echo "Please fill out all fields.";
    exit;
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format.";
    exit;
  }

  if (!preg_match("/^\d{10}$/", $contact)) {
    echo "Invalid contact number.";
    exit;
  }

  $to = "your-email@example.com"; // Replace with your email
  $subject = "New Order from $name";
  $body = "Name: $name\nEmail: $email\nContact: $contact\nAddress: $address\nOrder Details:\n$message";
  $headers = "From: $email";
}
?>
