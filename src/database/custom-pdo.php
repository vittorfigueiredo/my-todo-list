<?php

require __DIR__ . "/../configs/dotenv.php";

$driver   = $_ENV["DB_DRIVER"];
$host     = $_ENV["DB_HOST"];
$username = $_ENV["USERNAME"];
$password = $_ENV["PASSWORD"];
$database = $_ENV["DATABASE"];

try {
  $pdo = new PDO("$driver:host=$host;dbname=$database", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
  echo json_encode(["success" => false, "message" => "ERROR: " . $error->getMessage()]);
}
