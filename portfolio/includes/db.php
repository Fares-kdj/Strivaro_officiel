<?php
$host = 'localhost';
$dbname = 'portfolio_db';
$username = 'root'; // Par défaut pour XAMPP/WAMP
$password = '';     // Par défaut pour XAMPP/WAMP

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>