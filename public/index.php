<?php

// Démarrer la session si nécessaire
session_start();

// Inclure le fichier de routes
require_once(__DIR__ . '/../src/router/routes.php');

// Inclure le contrôleur principal
require_once(__DIR__ . '/../src/controllers/MainController.php');

// Initialiser le contrôleur
$controller = new MainController();

// Vérifier si une action est spécifiée dans l'URL, par exemple "/home", "/about", etc.
$action = isset($_GET['action']) ? $_GET['action'] : 'home'; // Définir une action par défaut, ici 'home'

// Traiter la requête en fonction de l'action
switch ($action) {
    case 'home':
        $controller->home();
        break;

    case 'about':
        $controller->about();
        break;

    case 'catalogue':
        $controller->catalogue();
        break;

    case 'detail':
        $controller->detail();
        break;

    case 'login':
        $controller->login();
        break;

    case 'register':
        $controller->register();
        break;

    case 'panier':
        $controller->panier();
        break;

    default:
        // Si l'action demandée n'est pas trouvée, afficher une page 404
        $controller->notFound();
        break;
}

// Vous pouvez ajouter ici des actions de traitement, comme l'enregistrement dans la base de données ou la gestion de formulaires.
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site E-commerce de Pierre</title>
    

    <!-- Lien vers votre fichier CSS -->
    <link rel="stylesheet" href="styles.css"> <!-- Assurez-vous que le fichier styles.css est dans le dossier public -->
</head>
<body>
    <!-- Votre contenu HTML ici -->



    <main>
        <!-- Le contenu dynamique du site sera chargé ici par les contrôleurs -->
        <?php
        // Inclure le contrôleur de la page d'action
        switch ($action) {
            case 'home':
                $controller->home();
                break;
            case 'about':
                $controller->about();
                break;
            case 'catalogue':
                $controller->catalogue();
                break;

            case 'detail':
                $controller->detail();
                break;
            case 'login':
                $controller->login();
                break;
            case 'register':
                $controller->register();
                break;
            case 'panier':
                $controller->panier();
                break;
            default:
                $controller->notFound();
                break;
        }
        ?>
    </main>

    <footer>
    <p>&copy; 2024 Mon E-commerce. Tous droits réservés.</p>
</footer>

</body>
</html>