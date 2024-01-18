<?php
// Vérifie qu'il provient d'un formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST["name"]) ? $_POST["name"] : '';
    $email = isset($_POST["email"]) ? $_POST["email"] : '';

    if (empty($name)) {
        $error_message = "S'il vous plaît entrez votre nom";
    } elseif (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "S'il vous plaît entrez une adresse e-mail valide";
    } else {
        $success_message = "Salut " . htmlspecialchars($name) . ", votre adresse e-mail est " . htmlspecialchars($email);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Traitement</title>
</head>
<body>
    <?php if (isset($error_message)): ?>
        <div style="color: red;"><?php echo $error_message; ?></div>
    <?php elseif (isset($success_message)): ?>
        <div style="color: green;"><?php echo $success_message; ?></div>
    <?php endif; ?>

    <form method="post" action="">
        <label for="name">Nom:</label>
        <input type="text" name="name" required><br>

        <label for="email">Adresse e-mail:</label>
        <input type="email" name="email" required><br>

        <input type="submit" value="Soumettre">
    </form>
</body>
</html>
