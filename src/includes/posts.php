<?php
function posts_getAll($db)
{
    $sql = 'SELECT * from `posts`';
    $result = $db->query($sql);
    foreach ($result as $row) {
        $posts[] = $row['body'];
    }
    return $posts;
}

function posts_insert($db, $body)
{
    $sql = 'INSERT INTO `posts` SET `body` = :body, `date` = CURRENT_TIMESTAMP()';
    $statement = $db->prepare($sql);
    $statement->bindValue(':body', $body);
    $statement->execute();
}
