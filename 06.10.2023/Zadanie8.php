<?php
if (isset($_POST['submit'])) {
    $liczba1 = $_POST['liczba1'];
    $liczba2 = $_POST['liczba2'];
    $liczba3 = $_POST['liczba3'];

    if (is_numeric($liczba1) && is_numeric($liczba2) && is_numeric($liczba3)) {
        if ($liczba1 == $liczba2 || $liczba1 == $liczba3 || $liczba2 == $liczba3) {
            echo "Przynajmniej dwie spośród podanych liczb są takie same.";
        } else {
            echo "Wszystkie trzy podane liczby są różne.";
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
    <title>Sprawdź powtórzenia liczb</title>
</head>
<body>
    <form method="post" action="">
        <label for="liczba1">Podaj pierwszą liczbę:</label>
        <input type="text" id="liczba1" name="liczba1" required>

        <label for="liczba2">Podaj drugą liczbę:</label>
        <input type="text" id="liczba2" name="liczba2" required>

        <label for="liczba3">Podaj trzecią liczbę:</label>
        <input type="text" id="liczba3" name="liczba3" required>

        <button type="submit" name="submit">Sprawdź powtórzenia</button>
    </form>
</body>
</html>