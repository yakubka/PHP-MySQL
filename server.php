<?php

$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);


if (empty($username) || empty($email) || empty($password)) {
    die("All fields are required.");
}


$hashedPassword = password_hash($password, PASSWORD_DEFAULT);


$mysqli = new mysqli("localhost", "root", "", "users");


if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}


$stmt = $mysqli->prepare("INSERT INTO `registration-db` (username, email, password) VALUES (?, ?, ?)");
if (!$stmt) {
    die("Prepare failed: " . $mysqli->error);
}


$stmt->bind_param("sss", $username, $email, $hashedPassword);
if ($stmt->execute()) {
    echo "Data successfully added!";
} else {
    die("Execution failed: " . $stmt->error);
}


$stmt->close();
$mysqli->close();
?>
