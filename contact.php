<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
  <?php include 'navbar.php'; ?>
    <form class="container">
          <div class="col">
          <label class="form-label">Voor naam</label>
            <input type="text" class="form-control" placeholder="Voor naam" aria-label="First name" required>
          </div>
          <div class="col">
          <label class="form-label">Achternaam</label>
            <input type="text" class="form-control" placeholder="Achter naam" aria-label="Last name" required>
          </div>
        <div class="col">
          <label class="form-label">Telefoon nummer</label>
            <input type="text" class="form-control" placeholder="Telefoon nummer" aria-label="Last name" required>
          </div>
          <div class="col">
          <label class="form-label">email</label>
            <input type="email" class="form-control" placeholder="email" aria-label="Last name" required>
          </div>  
          <div class="form-group">
            <label for="exampleFormControlTextarea1"></label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Schrijf je vraag hier" required ></textarea>
          </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" required>
            <label class="form-check-label" for="gridCheck">
              Ik ben geen robot
            </label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Stuur </button>
        </div>
      </form>
</body>
</html>