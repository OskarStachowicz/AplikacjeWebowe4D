<?php
if (isset($_POST['submit'])) {
    $liczba = $_POST['liczba'];

    if (is_numeric($liczba)) {
        if ($liczba >= 100 && $liczba < 150) {
            echo "Podana liczba $liczba mieści się w przedziale <100,150).";
        } else {
            echo "Podana liczba $liczba nie mieści się w przedziale <100,150).";
        }
    } else {
        echo "Podana wartość nie jest liczbą.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprawdź przedział</title>
</head>
<body>
    <form method="post" action="">
        <label for="liczba">Podaj liczbę:</label>
        <input type="text" id="liczba" name="liczba" required>
        <button type="submit" name="submit">Sprawdź</button>
    </form>
</body>
</html>