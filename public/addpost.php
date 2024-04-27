<?php
include_once __DIR__ . '/../src/includes/database.php';
include_once __DIR__ . '/../src/includes/posts.php';

try {
    if (isset($_POST['body'])) {
        $body = htmlspecialchars($_POST['body'], ENT_QUOTES, 'UTF-8');
        $db = db_connect();
        posts_insert($db, $body);
        header('Location: /');
    }
    ob_start();
    include __DIR__ . '/../src/templates/postform.html.php';
    $content = ob_get_clean();
    $title = 'Add a Post';
} catch (PDOException $e) {
    $error = "Connection failed: " . $e->getMessage();
}

include __DIR__ . '/../src/templates/layout.html.php';
