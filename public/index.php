<?php
require_once __DIR__ . '/../config.php';

try {
  include __DIR__ . '/../src/includes/db_connection.php';
  $sql = 'SELECT `body` from `posts`';
  $result = $conn->query($sql);
  foreach ($result as $row) {
    $posts[] = $row['body'];
  }

  ob_start();
  include __DIR__ . '/../src/templates/posts.html.php';
  $content = ob_get_clean();
  $title = 'Posts';
} catch (PDOException $e) {
  $error = "Connection failed: " . $e->getMessage();
}

include __DIR__ . '/../src/templates/layout.html.php';
