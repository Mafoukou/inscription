<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

include_once('config.php');

// Récupérer les informations de l'utilisateur connecté
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE id = $user_id";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "Erreur lors de la récupération des informations de l'utilisateur.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="inscription.css" />
    <!-- Inclure Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Tableau de bord</title>
</head>
<body>
    <h2>Bienvenue, <?php echo $_SESSION['username']; ?>!</h2>
    
    <!-- Afficher l'image de profil -->
    <?php if (!empty($user['profile_image'])): ?>
        <img src="<?php echo $user['profile_image']; ?>" alt="Image de profil">
    <?php endif; ?>

    <p><a href="logout.php">Se déconnecter</a></p>

    <!-- Ajoutez ici le code pour afficher les messages et les images partagés -->

</body>
</html>
