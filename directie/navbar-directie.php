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
          <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">ons vakken</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">inschrijven</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../contact.php">contact</a>

        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Directies
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="carete-directie.php">Toevoegen</a>
            <a class="dropdown-item" href="update-directie.php">Updaten</a>
            <a class="dropdown-item" href="read-directie.php">Alle Directies</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Verwijderen</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Docenten
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Toevoegen</a>
            <a class="dropdown-item" href="#">Updaten</a>
            <a class="dropdown-item" href="#">Alle Directies</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Verwijderen</a>
          </div>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            leerlingen
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Toevoegen</a>
            <a class="dropdown-item" href="#">Updaten</a>
            <a class="dropdown-item" href="#">Alle Directies</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Verwijderen</a>
          </div>
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
