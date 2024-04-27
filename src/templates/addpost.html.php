<form method="post" action="">
    <div><label for="body">Post Body</label></div>
    <div>
        <textarea name="body" required><?= isset($post['body']) ? $post['body'] : '' ?></textarea>
        <?php if (isset($post)) : ?>
            <input name="id" value="<?= $post['id'] ?>" type="hidden" />
        <?php endif; ?>
    </div>
    <div><button type="submit"><?= isset($post) ? 'Update' : 'New Post' ?></button></div>
</form>