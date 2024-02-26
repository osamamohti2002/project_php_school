<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php include 'navbar-directie.php';?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Contact</h3>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                                <label for="naam">Voor naam</label>
                                <input type="text" class="form-control" name="first_name" required>
                            </div>
                            <div class="form-group">
                                <label>Achternaam</label>
                                <input type="text" class="form-control" name="last_name" required>
                            </div>
                            <div class="form-group">
                                <label>email</label>
                                <input type="email" class="form-control" name="email" required >
                            </div>
                            <div class="form-group">
                                <label>wachtwoord</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label>id </label>
                                <input type="text" class="form-control" id="telefoonnummer" name="id">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="index.php" class="btn btn-danger">Cancel</a>
                            
    
</body>
</html>