<?php

require __DIR__ . "/../database/custom-pdo.php";
require __DIR__ . "/../middlewares/cors.php";

$sql = "delete from task";
$statement = $pdo->query($sql);
$result = $statement->execute();

if ($result) {
  echo json_encode([
    "success" => true,
    "message" => "Tasks deletadas com success!"
  ]);
  die;
}

echo json_encode([
  "success" => false,
  "message" => "Não foi possível deletar as tasks!"
]);
die;
