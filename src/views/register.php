<?php
include('partials/header.php');
?>
<main>
    <h2>Créer un compte</h2>
    <form action="register.php" method="post">
        <label for="username">Créer un Nom d'utilisateur:</label>
        <input type="text" name="username" id="username" required>
        
        <label for="password">Créer un Mot de passe:</label>
        <input type="password" name="password" id="password" required>
        
        <button type="submit">S'inscrire</button>
    </form>
</main>
<?php
include('partials/footer.php');
?>
