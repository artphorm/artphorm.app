<?php
include_once __DIR__ . '/../src/includes/database.php';
include_once __DIR__ . '/../src/includes/posts.php';

try {
    if (isset($_POST['id'])) {
        $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        $id = filter_var($id, FILTER_VALIDATE_INT);
        echo ('id: ' . $id);
        if (!$id) {
            header('Location: /');
        }
    }
    $db = db_connect();
    posts_delete($db, $id);
    header('Location: /');
} catch (PDOException $e) {
    $error = "Connection failed: " . $e->getMessage();
}

include __DIR__ . '/../src/templates/layout.html.php';
