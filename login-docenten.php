<?php
include 'conn.php';
session_start(); // Start de sessie als deze nog niet is gestart

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Haal de gebruiker op uit de database met het opgegeven e-mailadres
    $login = $database_conection->prepare("SELECT * FROM leerlingen WHERE email = :email AND pass = :password");
    $login->bindParam(':email', $email);
    $login->bindParam(':password', $password);
    $login->execute();
    
    // Controleren of er een gebruiker is gevonden
    $user = $login->fetch(PDO::FETCH_ASSOC);
    if($user) {
        // Controleren of het ingevoerde wachtwoord overeenkomt met het opgeslagen wachtwoord
        if(password_verify($password, $user['pass'])) {
            // Inloggen is geslaagd
            $_SESSION['email'] = $user['email'];
            $_SESSION['user_id'] = $user['id'];
            header('Location: directie/directie.php');
            exit;
        } else {
            echo 'Het opgegeven e-mailadres of wachtwoord is onjuist.';
        }
    } else {
        echo 'Gebruiker niet gevonden.';
    }
}
?>