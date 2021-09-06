<?php

require __DIR__ . "/../database/custom-pdo.php";
require __DIR__ . "/../middlewares/cors.php";
require __DIR__ . "/../functions/uuid-generate.php";

$body = $_REQUEST;

foreach (["name"] as $param) {
  if (!array_key_exists($param, $body)) {
    echo json_encode([
      "success" => false,
      "message" => "Parâmetro $param obrigatório!"
    ]);
    die;
  }
}

if (strlen($body["name"]) === 0) {
  echo json_encode([
    "success" => false,
    "message" => "Campo name não pode ser vazio!"
  ]);
  die;
}

$uuid = uuidGenerate();
$name = $body["name"];
$description = $body["description"];

$sql = "insert into task (id, name, description) values('$uuid', '$name', '$description')";
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
