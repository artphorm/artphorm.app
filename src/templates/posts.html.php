<ul>
  <?php foreach ($posts as $post) : ?>
    <li><?= htmlspecialchars($post, ENT_QUOTES, 'UTF-8'); ?></li>
  <?php endforeach; ?>
</ul>