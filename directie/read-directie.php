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

<?php include 'navbar-directie.php';
        include '../conn.php'; ?>
<div class="container">
<h2>leerlingen gegevens</h2>

        <table class="table table-dark table-hover">
            <th>leerling id</th>
            <th>leerling voor naam</th>
            <th>leerling achter naam </th>
            <th>leerling email</th>
            <th>leerling wachtwoord</th>

<?php 

        $read = $database_conection->prepare("SELECT *  FROM dicrectie");
$read->execute();

foreach($read as $row){;
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['last_name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "</tr>";
}
    ?>
    </div>
        </table>






</body>
</html>