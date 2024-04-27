<!DOCTYPE html>
<html lang="en">

<head>
  <title><?= $title ?> | Artphorm</title>
  <meta charset="UTF-8">
</head>
<header>
  <h2>Artphorm</h2>
  <nav>
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/addpost.php">Add Post</a></li>
    </ul>
  </nav>
</header>
<main>
  <h1><?= $title ?></h1>
  <?php if (isset($error)) : ?>
    <p><?= $error ?></p>
  <?php endif; ?>
  <?php if (isset($content)) : ?>
    <?= $content ?>
  <?php else : ?>
    <p>Nothing to see here.</p>
  <?php endif; ?>
</main>
<footer>
  <p><small>&copy; <?= date('Y') ?> artphorm.app</small></p>
</footer>

</html>