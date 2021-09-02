<?php

require __DIR__ . "/../database/custom-pdo.php";
require __DIR__ . "/../middlewares/cors.php";

$sql = "select * from task";
$statement = $pdo->prepare($sql);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

$quantidade_tasks = count($results);

if ($quantidade_tasks > 0) {
  echo json_encode([
    "success" => true,
    "tasks" => $results
  ]);
  die;
}

echo json_encode([
  "success" => true,
  "tasks" => []
]);
die;
