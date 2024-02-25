<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php require_once 'navbar-directie.php';
          include '../conn.php';
       if(isset($_POST['sing_up'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $add_new_user = $database_conection->prepare("INSERT INTO dicrectie (first_name, last_name, email, password) VALUES
        (:first_name, :last_naem, :email, :password)");
        $add_new_user->bindParam(':first_name', $first_name);
        $add_new_user->bindParam(':last_naem', $last_name);
        $add_new_user->bindParam(':email', $email);
        $add_new_user->bindParam(':password', $password);
        $add_new_user->execute();

        if($add_new_user){
            echo "<div class='alert alert-success' role='alert'>
            <strong>Success!</strong> User added successfully.
            </div>";
        }else{
            echo "<div class='alert alert-danger' role='alert'>
            <strong>Error!</strong> Something went wrong.
            </div>";
        }
       }
    ?>
    <div class="container mt-5">
  <h2>Toevoegen een dierecteur toe</h2>
  <form method="post">
    <div class="form-group">
      <label>Voor naam:</label>
      <input type="text" class="form-control" placeholder="Voer voor naam in" name="first_name" required>
    </div>
    <div class="form-group">
      <label>Achter naam:</label>
      <input type="text" class="form-control" placeholder="Voer achter naam in" name="last_name" required>
    </div>
    <div class="form-group">
      <label>E-mail:</label>
      <input type="email" class="form-control" placeholder="Voer je email in" name="email" required>
    </div>
    <div class="form-group">
      <label>wachtwoord:</label>
      <input type="password" class="form-control" placeholder="Voer je wachtwoord in" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary" name="sing_up">Toevoegen</button>
  </form>
</div>



</body>
</html>