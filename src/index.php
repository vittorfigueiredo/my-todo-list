<?php

require __DIR__ . "/database/custom-pdo.php";
require __DIR__ . "/middlewares/cors.php";

echo json_encode([
  "success" => true,
  "body" => [
    "Author" => [
      "name" => "Vitor Figueiredo",
      "GitHub" => "https://github.com/vitorfigueiredopb",
      "LinkedIn" => "https://www.linkedin.com/in/vitorfigueiredopb/"
    ],
    "Last Update" => "2021/08/31 10:41:00"
  ]
]);
