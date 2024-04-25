<!DOCTYPE html>
<html lang="en">

<head>
  <title><?= $title ?></title>
  <meta charset="UTF-8">
</head>
<header>
  <h2>Artphorm</h2>
</header>
<main>
  <?php if (isset($error)) : ?>
    <p><?= $error ?></p>
  <?php endif; ?>
  <?= $content ?>
</main>
<footer>
  <p><small>&copy; <?= date('Y') ?> artphorm.app</small></p>
</footer>

</html>