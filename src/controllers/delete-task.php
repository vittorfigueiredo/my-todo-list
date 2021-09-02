<?php

require __DIR__ . "/../database/custom-pdo.php";
require __DIR__ . "/../middlewares/cors.php";

$taskId = $_REQUEST["task_id"];

if ($taskId !== "") {
  $sql = "delete from task where id = '$taskId'";
  $statement = $pdo->query($sql);
  $result = $statement->execute();

  if ($result) {
    echo json_encode([
      "success" => true,
      "message" => "Task deletada com sucesso!"
    ]);
    die;
  }

  echo json_encode([
    "success" => false,
    "message" => "Não foi possivel deletar a task!"
  ]);
  die;
}

echo json_encode([
  "success" => false,
  "message" => "Parâmetro task_id obrigatório!"
]);
die;
