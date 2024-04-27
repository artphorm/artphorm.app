<ul>
  <?php foreach ($posts as $post) : ?>
    <li>
      <?= htmlspecialchars($post['body'], ENT_QUOTES, 'UTF-8'); ?>
      <form method="post" action="/delete.php">
        <input name="id" value="<?= $post['id'] ?>" type="hidden" />
        <button type="submit">Delete</button>
      </form>
    </li>
  <?php endforeach; ?>
</ul>