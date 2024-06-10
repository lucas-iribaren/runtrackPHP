<?php
session_start();

if (isset($_POST['reset'])) {
    $_SESSION['nbVisites'] = 0;
} else {
    if (isset($_SESSION['nbVisites'])) {
        $_SESSION['nbVisites']++;
    } else {
        $_SESSION['nbVisites'] = 1;
    }
}

echo "Nombre de visites : " . $_SESSION['nbVisites'];
?>

<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>
