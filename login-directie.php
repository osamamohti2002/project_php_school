<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'navbar.php';
include 'conn.php';
session_start(); // Start session if not already started

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $login = $database_conection->prepare("SELECT * FROM dicrectie WHERE email = :email AND password = :password");
    $login->bindParam(':email', $email);
    $login->bindParam(':password', $password);
    $login->execute();

    // Fetch the result
    $result = $login->fetchAll();

    // Check if there's any result
    if(count($result) > 0){
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('location: directie/navbar-directie.php');
        echo "welkom" ;
  
    } else {
        echo 'email of wachtwoord komt niet overeen';
    }
}
?>




<div class="container">
  <h2 class="text-center mt-5">Login</h2>
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
      <form method="post">
        <div class="form-group">
          <label for="emailOrUsername">email</label>
          <input type="email" name="email" class="form-control" id="emailOrUsername" placeholder="email">
        </div>
        <div class="form-group">
          <label for="password">wachtwoord</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="wachtwoord">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="rememberMe">
          <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block" name="login">log in</button>
        <div class="text-center">
          <button type="button" class="btn btn-link">
            <i class="fab fa-facebook-f"></i>
          </button>
          <button type="button" class="btn btn-link">
            <i class="fab fa-google"></i>
          </button>
        </div>
        <p class="text-center mt-3">maak hier je accunt aan <a href="#">Registeren</a></p>
        <p class="text-center mt-3"><a href="#">wachtwoord vergeten</a></p>
      </form>
    </div>
  </div>
</div>
</body>
</html>