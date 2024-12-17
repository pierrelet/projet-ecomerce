<?php
// db.php - fichier de connexion à la base de données PostgreSQL

// Paramètres de la connexion
$host = 'localhost';  // hôte de la base de données, en général localhost
$port = '5432';       // port PostgreSQL (généralement 5432)
$dbname = 'ecomerpsql -U postgresce'; // nom de votre base de données
$user = 'postgres';   // utilisateur PostgreSQL
$password = '2005'; // mot de passe de l'utilisateur PostgreSQL

// DSN (Data Source Name) pour la connexion PDO
$dsn = "pgsql:host=$host;port=$port;dbname=$dbname";

// Tentative de connexion avec gestion des erreurs
try {
    $pdo = new PDO($dsn, $user, $password);
    // Définit le mode de gestion des erreurs
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie à la base de données.";
} catch (PDOException $e) {
    die("Échec de la connexion : " . $e->getMessage());
}
?>
