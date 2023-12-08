<?php
if (isset($_POST['submit'])) {
    $rok = $_POST['rok'];

    if (is_numeric($rok) && $rok >= 1582) {
        if (($rok % 4 == 0 && $rok % 100 != 0) || ($rok % 400 == 0)) {
            echo "Luty w roku $rok ma 29 dni (rok przestępny).";
        } else {
            echo "Luty w roku $rok ma 28 dni.";
        }
    } else {
        echo "Podany rok nie jest poprawny.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ilość dni w lutym</title>
</head>
<body>
    <form method="post" action="">
        <label for="rok">Podaj rok (od 1582):</label>
        <input type="text" id="rok" name="rok" required>
        <button type="submit" name="submit">Sprawdź</button>
    </form>
</body>
</html>