<?php

require __DIR__ . "/../database/custom-pdo.php";
require __DIR__ . "/../middlewares/cors.php";
require __DIR__ . "/../functions/uuid-generate.php";

$body = $_REQUEST;

foreach (["name", "description"] as $param) {
  if (!array_key_exists($param, $body)) {
    echo json_encode([
      "success" => false,
      "message" => "Parâmetro $param obrigatório!"
    ]);
    die;
  }
}

$uuid = uuidGenerate();
$name = $body["name"];
$description = $body["description"];

$sql = "insert into task set id = '$uuid', name = '$name', description = '$description'";
$statement = $pdo->prepare($sql);
$result = $statement->execute();


if ($result) {
  echo json_encode([
    "success" => true,
    "message" => "Task adicionada com sucesso"
  ]);
  die;
}

echo json_encode([
  "success" => false,
  "message" => "Não foi possivel adicionar a task"
]);
die;
