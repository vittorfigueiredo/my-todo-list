<?php

$driver = "mysql";
$host = "localhost";
$username = "";
$password = "";
$database = "";

try {
  $pdo = new PDO("$driver:host=$host;dbname=$database", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
  echo json_encode(["success" => false, "message" => "ERROR: " . $error->getMessage()]);
}
