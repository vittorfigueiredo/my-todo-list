<?php

$driver = "mysql";
$host = "sql10.freesqldatabase.com";
$username = "sql10433590";
$password = "qyzbKzmBm8";
$database = "sql10433590";

try {
  $pdo = new PDO("$driver:host=$host;dbname=$database", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
  echo json_encode(["success" => false, "message" => "ERROR: " . $error->getMessage()]);
}
