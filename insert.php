<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Validate the credentials (this is just a basic example, use secure methods in a real-world scenario)
  if ($username === "your_username" && $password === "your_password") {
    // Start a session
    session_start();

    // Set session variables
    $_SESSION["username"] = $username;

    // Redirect to a secure page
    header("Location: /dashboard");
    exit();
  } else {
    echo "Invalid username or password";
  }
}
