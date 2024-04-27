<?php
ob_start();
include __DIR__ . '/../src/templates/addpost.html.php';
$content = ob_get_clean();
$title = 'Add a Post';
include __DIR__ . '/../src/templates/layout.html.php';
