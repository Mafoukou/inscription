<?php
include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header('Location: dashboard.php');
        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Nom d'utilisateur introuvable.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="inscription.css" />
    <title>Connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <form method="post" action="">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" name="username" required><br>

        <label for="password">Mot de passe:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
