<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de transformation de texte</title>
</head>
<body>
    <?php
    function makeBold($str) {
        $words = explode(' ', $str);
        foreach ($words as &$word) {
            if (ctype_upper($word[0])) {
                $word = '<strong>' . $word . '</strong>';
            }
        }
        return implode(' ', $words);
    }

    function cesarCipher($str, $shift = 2) {
        $result = '';
        $shift = $shift % 26;
        for ($i = 0; $i < strlen($str); $i++) {
            $char = $str[$i];
            if (ctype_alpha($char)) {
                $ascii_offset = ctype_upper($char) ? 65 : 97;
                $result .= chr((ord($char) - $ascii_offset + $shift) % 26 + $ascii_offset);
            } else {
                $result .= $char;
            }
        }
        return $result;
    }

    function plateforme($str) {
        $words = explode(' ', $str);
        foreach ($words as &$word) {
            if (substr($word, -2) == 'me') {
                $word .= '_';
            }
        }
        return implode(' ', $words);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST['str'];
        $transformation = $_POST['transformation'];
        $result = '';

        switch ($transformation) {
            case 'gras':
                $result = makeBold($str);
                break;
            case 'cesar':
                $result = cesarCipher($str);
                break;
            case 'plateforme':
                $result = plateforme($str);
                break;
        }
        
        echo "Texte transformé : " . $result;
    }
    ?>

    <form action="" method="POST">
        <label for="str">Texte :</label>
        <input type="text" id="str" name="str" required>
        <br><br>
        <label for="transformation">Transformation :</label>
        <select id="transformation" name="transformation">
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <br><br>
        <input type="submit" value="Transformer">
    </form>
</body>
</html>
