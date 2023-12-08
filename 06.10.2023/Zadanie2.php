<?php
if (isset($_POST['submit'])) {
    $liczba1 = $_POST['liczba1'];
    $liczba2 = $_POST['liczba2'];

    if (is_numeric($liczba1) && is_numeric($liczba2)) {
        if ($liczba2 != 0) {
            if ($liczba1 % $liczba2 == 0) {
                echo "$liczba1 jest podzielna bez reszty przez $liczba2.";
            } else {
                echo "$liczba1 nie jest podzielna bez reszty przez $liczba2.";
            }
        } else {
            echo "Drugą liczbą nie może być zero.";
        }
    } else {
        echo "Podane wartości nie są liczbami.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprawdź podzielność</title>
</head>
<body>
    <form method="post" action="">
        <label for="liczba1">Podaj pierwszą liczbę:</label>
        <input type="text" id="liczba1" name="liczba1" required>

        <label for="liczba2">Podaj drugą liczbę:</label>
        <input type="text" id="liczba2" name="liczba2" required>

        <button type="submit" name="submit">Sprawdź</button>
    </form>
</body>
</html>