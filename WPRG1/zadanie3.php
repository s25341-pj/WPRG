<!DOCTYPE html>
<html>
<head>
    <title>Pierwiastek kwadratowy</title>
</head>
<body>
<h1>Pierwiastek kwadratowy</h1>
<form method="post" action="">
    <label for="value">Podaj wartość:</label>
    <input type="number" id="value" name="value" step="any" min="0" required><br>
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $value = $_POST["value"];

    if ($value > 0) {
        $result = sqrt($value);
        echo "<p>Pierwiastek kwadratowy z $value wynosi: " . number_format($result, 2) . "</p>";
    } else {
        echo "<p>Wprowadź wartość dodatnią większą od zera.</p>";
    }
}
?>
</body>
</html>
