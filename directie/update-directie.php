<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
    <?php include '../conn.php'; include 'navbar-directie.php';

    if(isset($_POST['zoeken'])){
        $user = $_POST['first_name'];
        $update = $database_conection->prepare("SELECT * FROM dicrectie WHERE first_name = :user");
        $update->bindParam('user', $user);
        $update->execute();
        header('location:update-directie2.php');

        // Fetch the result
        $result = $update->fetchAll();

    }

    
    
    
    ?>


    <div class="container mt-5">
        <h2>zoek naar een naam</h2>
        <form method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="first_naam" placeholder="Zoeken" aria-label="Zoekterm" aria-describedby="basic-addon2" required>
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button" name="zoeken">Zoeken</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>