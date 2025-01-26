<?php
    include('../auth_middleware.php');
    include('../helpers.php');
    include('../database.php');


    $image_id = $_GET['image_id'];

    $sql = 'DELETE FROM images WHERE id = :image_id';

    $statement = $pdo->prepare($sql);

    $statement->execute([
        ':image_id' => $image_id
    ]);  

    redirect('/images');