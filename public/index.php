<?php
include_once __DIR__ . '/../config.php';
include_once __DIR__ . '/../src/includes/database.php';
include_once __DIR__ . '/../src/includes/posts.php';

try {
  $db = db_connect();
  $posts = posts_getAll($db);

  ob_start();
  include __DIR__ . '/../src/templates/posts.html.php';
  $content = ob_get_clean();
  $title = 'Posts';
} catch (PDOException $e) {
  $error = "Connection failed: " . $e->getMessage();
}

include __DIR__ . '/../src/templates/layout.html.php';
