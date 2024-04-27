<?php
function posts_getAll(PDO $db)
{
    $sql = 'SELECT * from `posts`';
    $result = $db->query($sql);
    foreach ($result as $row) {
        $posts[] = $row;
    }
    return $posts;
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
