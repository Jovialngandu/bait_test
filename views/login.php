<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - Niyako</title>
    <link rel="stylesheet" href="/assets/css/style.css"> 
</head>
<body class="login-page">
    <div class="login-container">
        <h2>Connexion à Niyako</h2>
        <form action="/controllers/process.php" method="POST">
            <div class="form-group">
                <label for="username">Email ou Nom d'utilisateur</label>
                <input type="text" id="username" name="username" placeholder="Entrez votre email" required>
            </div>
            
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Votre mot de passe" required>
            </div>
            
            <button type="submit" class="btn-primary">Se connecter</button>
        </form>
    </div>
</body>
</html>