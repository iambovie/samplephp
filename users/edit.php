<?php 
    include('../auth_middleware.php');
    include('../partials/header.php');
    include('../partials/sidebar.php');
    include('../database.php');
    include('../helpers.php');

    $user_id = $_GET['user_id'];

    $sql = 'SELECT * FROM users WHERE ID = :user_id';

    $statement = $pdo->prepare($sql);

    $statement->execute([
        ':user_id' => $user_id
    ]);


    $user = $statement->fetch();

    $name = $user['name'];
    $email = $user['email'];
?>    

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <h1 class="h2 mt-5">Edit User</h1>

    <?php displayMessage() ?>
    
    <form action="<?= $domain ?>/users/update.php?user_id=<?= $user_id ?>" method="POST">
        <?php include('_form.php') ?>
    </form>

</main>

<?php include('../partials/footer.php') ?>