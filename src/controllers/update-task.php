<?php

require __DIR__ . "/../database/custom-pdo.php";
require __DIR__ . "/../middlewares/cors.php";

$body = $_REQUEST;

foreach (["id", "name", "description"] as $param) {
  if (!array_key_exists($param, $body)) {
    echo json_encode([
      "success" => false,
      "message" => "Parâmetro $param obrigatório!"
    ]);
    die;
  }
}

$id = $_REQUEST["id"];
$name = $_REQUEST["name"];
$description = $_REQUEST["description"];

$sql = "update task set name = '$name', description = '$description', updated_at = now() where id = '$id'";
$statement = $pdo->prepare($sql);
$result = $statement->execute();

if ($result) {
  echo json_encode([
    "success" => true,
    "message" => "Task atualizada com sucesso! "
  ]);
  die;
}

echo json_encode([
  "success" => false,
  "message" => "Não foi possivel atualizara task!"
]);
die;
