<?php
require_once __DIR__ . '/../config.php';

try {
  $conn = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USERNAME, DB_PASSWORD);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = 'SELECT `body` from `posts`';
  $result = $conn->query($sql);

  while ($row = $result->fetch()) {
    echo $row['body'];
  }
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
