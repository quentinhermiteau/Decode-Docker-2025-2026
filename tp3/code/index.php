<?php

$pdo = new PDO(
  "pgsql:host=postgres;port=5432;dbname={$_ENV['POSTGRES_DB']}",
  $_ENV['POSTGRES_USER'],
  $_ENV['POSTGRES_PASSWORD']
);

$stmt = $pdo->query('SELECT * FROM test');

foreach ($stmt as $row) {
    echo $row['test'] . PHP_EOL;
}