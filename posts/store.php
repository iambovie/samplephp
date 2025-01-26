<?php
    include('../auth_middleware.php');
    include('../helpers.php');
    include('../database.php');
    include('_validate.php');

    $sql = 'INSERT INTO articles (title, content, published_date, user_id)
    VALUES (:title, :content, :published_date, :user_id)';

    $statement = $pdo->prepare($sql);

    $statement->execute([
        ':title' => $title,
        ':content' => $content,
        ':published_date' => $published_date,
        ':user_id' => 1     // TODO add logged in user id
    ]);  

    redirect('/posts');