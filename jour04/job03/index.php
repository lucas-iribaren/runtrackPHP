<?php
session_start();

if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
} else {
    // Ajouter le prénom à la session si le formulaire est soumis
    if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
        // Initialiser la variable de session si elle n'existe pas
        if (!isset($_SESSION['prenoms'])) {
            $_SESSION['prenoms'] = [];
        }
        // Ajouter le prénom à la liste des prénoms
        $_SESSION['prenoms'][] = htmlspecialchars($_POST['prenom']);
    }
}

// Afficher l'ensemble des prénoms
if (isset($_SESSION['prenoms']) && !empty($_SESSION['prenoms'])) {
    echo "Liste des prénoms :<br>";
    echo "<ul>";
    foreach ($_SESSION['prenoms'] as $prenom) {
        echo "<li>" . $prenom . "</li>";
    }
    echo "</ul>";
}
?>

<form method="post">
    <input type="text" name="prenom" placeholder="Entrez un prénom">
    <button type="submit">Ajouter</button>
</form>

<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>
