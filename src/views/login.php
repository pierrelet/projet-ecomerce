<?php
include('partials/header.php');
?>
<main>
    <h2>Connexion</h2>
    <form action="login.php" method="post">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" name="username" id="username" required>
        
        <label for="password">Mot de passe:</label>
        <input type="password" name="password" id="password" required>
        
        <button type="submit">Se connecter</button>
    </form>
</main>
<?php
include('partials/footer.php');
?>
