<?php
if (isset($_POST['submit'])) {
    $wiek = $_POST['wiek'];

    if (is_numeric($wiek) && $wiek >= 0) {
        if ($wiek < 11) {
            echo "Osoba o wieku $wiek lat to dziecko.";
        } elseif ($wiek >= 11 && $wiek <= 17) {
            echo "Osoba o wieku $wiek lat to nastolatek.";
        } else {
            echo "Osoba o wieku $wiek lat to dorosły.";
        }
    } else {
        echo "Podana wartość nie jest poprawnym wiekiem.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprawdź wiek</title>
</head>
<body>
    <form method="post" action="">
        <label for="wiek">Podaj wiek:</label>
        <input type="text" id="wiek" name="wiek" required>
        <button type="submit" name="submit">Sprawdź</button>
    </form>
</body>
</html>