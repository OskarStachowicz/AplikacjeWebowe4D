<?php
if (isset($_POST['submit'])) {
    $liczba = $_POST['liczba'];

    if (is_numeric($liczba)) {
        if ($liczba < 0) {
            echo "Podana liczba $liczba jest mniejsza niż 0.";
        } elseif ($liczba > 0) {
            echo "Podana liczba $liczba jest większa niż 0.";
        } else {
            echo "Podana liczba $liczba jest równa 0.";
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
    <title>Sprawdź wartość</title>
</head>
<body>
    <form method="post" action="">
        <label for="liczba">Podaj liczbę:</label>
        <input type="text" id="liczba" name="liczba" required>
        <button type="submit" name="submit">Sprawdź</button>
    </form>
</body>
</html>