<?php
# maak verbinding met database
$dsn = "mysql:host=localhost;dbname=school";
$username = "root";
$password = "";


try{

$database_conection = new PDO($dsn, $username, $password);
echo 'je bent verbonden met database';

}catch(PDOException $e){
    echo 'verbinden met database mislukt ' .  $e->getMessage();
}

