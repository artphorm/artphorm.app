<?php
include_once __DIR__ . '/../src/includes/database.php';
include_once __DIR__ . '/../src/includes/posts.php';

try {
    $db = db_connect();

    if (isset($_POST['id'])) {
        // Update the edited post
        $id = $_GET['id'];
        $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
        $id = filter_var($id, FILTER_VALIDATE_INT);

        $body = htmlspecialchars($_POST['body'], ENT_QUOTES, 'UTF-8');
        posts_update($db, $id, $body);
    }

    // Fetch the edited post
    $id = $_GET['id'];
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $id = filter_var($id, FILTER_VALIDATE_INT);
    if (!$id) {
        header('Location: /');
    }

    $post = posts_getById($db, $id);

    ob_start();
    include __DIR__ . '/../src/templates/addpost.html.php';
    $content = ob_get_clean();
    $title = 'Edit Post.';
} catch (PDOException $e) {
    $error = "Connection failed: " . $e->getMessage();
}

include __DIR__ . '/../src/templates/layout.html.php';
