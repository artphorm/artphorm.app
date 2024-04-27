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
