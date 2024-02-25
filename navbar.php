<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Navbar</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">school</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">ons vakken</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">inschrijven</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.php">contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login-directie.php"><i class="fas fa-sign-in-alt"></i>Directie</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login-docenten.php"><i class="fas fa-sign-in-alt"></i>Docenten</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login-leerlingen.php"><i class="fas fa-sign-in-alt"></i> leerlingen</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
