<?php
include('partials/header.php');

// Récupérer l'ID du produit
$productId = isset($_GET['id']) ? $_GET['id'] : 1;
?>
<main>
    <h2>Détails du produit <?= $productId ?></h2>
    <p>Voici les détails du produit que vous avez sélectionné. Il s'agit du produit n° <?= $productId ?>.</p>
    <button>Ajouter au panier</button>
</main>
<?php
include('partials/footer.php');
?>
