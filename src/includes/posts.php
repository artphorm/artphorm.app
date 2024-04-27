<?php
function posts_getAll(PDO $db)
{
    $sql = 'SELECT * from `posts`';
    $result = $db->query($sql);
    foreach ($result as $row) {
        $posts[] = $row;
    }
    return $posts ?? null;
}

function posts_getById(PDO $db, int $id)
{
    $sql = 'SELECT * FROM `posts` WHERE `id` = :id';
    $statement = $db->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $result = $statement->fetchAll();
    foreach ($result as $row) {
        $posts[] = $row;
    }
    return $posts[0] ?? null;
}

function posts_insert(PDO $db, string $body)
{
    $sql = 'INSERT INTO `posts` SET `body` = :body, `date` = CURRENT_TIMESTAMP()';
    $statement = $db->prepare($sql);
    $statement->bindValue(':body', $body);
    $statement->execute();
}

function posts_delete(PDO $db, int $id)
{
    $sql = 'DELETE FROM `posts` WHERE `id` = :id';
    $statement = $db->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->execute();
}

function posts_update(PDO $db, int $id, string $body)
{
    $sql = 'UPDATE `posts` SET `body` = :body WHERE `id` = :id';
    $statement = $db->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':body', $body);
    $statement->execute();
}
