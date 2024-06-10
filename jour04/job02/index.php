<?php
//Durée 1 an
$cookie_lifetime = time() + (365 * 24 * 60 * 60);

if (isset($_POST['reset'])) {
    setcookie('nbVisites', 0, $cookie_lifetime);
    $_COOKIE['nbVisites'] = 0; // Mettre à jour la valeur dans $_COOKIE pour affichage immédiat
} else {
    // Vérifier si le cookie nbVisites existe
    if (isset($_COOKIE['nbVisites'])) {
        $nbVisites = $_COOKIE['nbVisites'] + 1;
    } else {
        // Initialiser le compteur de visites
        $nbVisites = 1;
    }
    setcookie('nbVisites', $nbVisites, $cookie_lifetime);
    $_COOKIE['nbVisites'] = $nbVisites; // Mettre à jour la valeur dans $_COOKIE pour affichage immédiat
}

echo "Nombre de visites : " . $_COOKIE['nbVisites'];
?>

<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>