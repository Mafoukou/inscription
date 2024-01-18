<?php
include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = $conn->query($query);

    if ($result) {
        header('Location: login.php');
    } else {
        echo "Erreur lors de l'inscription.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="inscription.css" />
    <title>Inscription</title>
</head>
<body>
    <div class="wrapper">
        <form method="POST" action="traitement.php" align="center">
            <div class="input-box">
                <input type="text" id="prénom" name="prénom" placeholder="Prénom(s)" required>
                <br/>
            </div>
            <div class="input-box">
                <input type="text" id="nom" name="nom" placeholder="Nom(s)" required >
                <br/>
            </div>
            <div class="input-box">
                <input type="text" id="email" name="email" placeholder="Entrez votre email" required>
                <br/>
            </div>
            <div class="input-box">
                <input type="password" id="pass" name="pass" placeholder="Mot de passe" required>
                <br/>
            </div>
            <input type="submit" class="btn" value="M'inscrire" name="envoi">
            
        </form>
    </div>
</body>
</html>
