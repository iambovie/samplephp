<?php
    session_start();
    include('helpers.php');
    $domain = 'http://localhost/samplephp';

    
    if (isset($_COOKIE['user_email'])) {
      $user_email = $_COOKIE['user_email'];
    }
?> 

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>iFIXIE MALDIVES</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= $domain ?>/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?= $domain ?>/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">

  <?php displayMessage() ?>
  
  <form action="<?= $domain ?>/auth.php" method="POST">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <div class="form-floating">
        <input value="<?= $user_email ?? '' ?>" name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      
      <div class="form-floating">
        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input name="remember_me" type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; Developed by Ahmed Latheef</p>
    </form>
</main>
    
  </body>
</html>
