<?php
$cookie_lifetime = time() + (365*24*60*60);

if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600);
    unset($_COOKIE['prenom']);
}

if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    setcookie('prenom', htmlspecialchars($_POST['prenom']), $cookie_lifetime);
    $_COOKIE['prenom'] = htmlspecialchars($_POST['prenom']); 
}

if (isset($_COOKIE['prenom'])) {
    echo "Bonjour " . htmlspecialchars($_COOKIE['prenom']) . " !";
    echo '<form method="post">
            <button type="submit" name="deco">Déconnexion</button>
          </form>';
} else {
    echo '<form method="post">
            <input type="text" name="prenom" placeholder="Entrez votre prénom">
            <button type="submit" name="connexion">Connexion</button>
          </form>';
}  