<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'card-database';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
  die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Создание таблицы cards, если она не существует
$createTableQuery = "CREATE TABLE IF NOT EXISTS cards (
      id INT(11) AUTO_INCREMENT PRIMARY KEY,
      title VARCHAR(255) NOT NULL,
      info1 VARCHAR(255) NOT NULL,
      info2 VARCHAR(255) NOT NULL,
      info3 VARCHAR(255) NOT NULL,
      image_path VARCHAR(255)
    )";
