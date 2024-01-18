<?php
session_start();
include 'includes/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

$user_id = $_SESSION['user_id'];
// Récupérer les informations de l'utilisateur à partir de la base de données
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="inscription.css" />
    <title>Profil</title>
</head>
<body>
    <div class="container">
        <h1>Profil</h1>
        <div>
            <!-- Afficher les informations du profil -->
        </div>
        <a href="logout.php">Se déconnecter</a>
    </div>
</body>
</html>
