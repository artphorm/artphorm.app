<?php

if (isset($_POST['name'])) {
  $name = htmlspecialchars($_POST['name']);
  if ($name) {
    include __DIR__ . '/../src/templates/hello.html.php';
    exit();
  }
}

include __DIR__ . '/../src/templates/helloform.html.php';
