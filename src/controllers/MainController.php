<?php

class MainController {
    // Méthode pour la page d'accueil
   

    public function home() {
        require_once __DIR__ . '/../views/home.php';
    }

    // Méthode pour la page About
    public function about() {
        require_once __DIR__ . '/../views/about.php'; // Corrigé pour inclure la vue about.php
    }

    // Méthode pour la page Catalogue
    public function catalogue() {
        require_once __DIR__ . '/../views/catalogue.php';

    }

    // Méthode pour la page de détail d'un produit
    public function detail() {
        require_once __DIR__ . '/../views/detail.php'; // Corrigé pour inclure la vue detail.php
    }

    // Méthode pour la page de connexion
    public function login() {
        require_once __DIR__ . '/../views/login.php'; // Corrigé pour inclure la vue login.php
    }

    // Méthode pour la page d'inscription
    public function register() {
        require_once __DIR__ . '/../views/register.php'; // Corrigé pour inclure la vue register.php
    }

    // Méthode pour le panier
    public function panier() {
        require_once __DIR__ . '/../views/panier.php'; // Corrigé pour inclure la vue panier.php
    }

    // Méthode pour afficher une page 404 (si une action est inconnue)
    public function notFound() {
        require_once __DIR__ . '/../views/404.php'; // Corrigé pour inclure la vue 404.php
    }
    
}
