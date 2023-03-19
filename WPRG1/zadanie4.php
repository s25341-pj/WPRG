<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator</title>
</head>
<body>
<h1>Kalkulator</h1>
<form method="post" action="">
    <label for="num1">Podaj pierwszą liczbę naturalną:</label>
    <input type="number" id="num1" name="num1" step="1" min="1" required><br>
    <label for="num2">Podaj drugą liczbę naturalną:</label>
    <input type="number" id="num2" name="num2" step="1" min="1" required><br>
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    if (is_numeric($num1) && is_numeric($num2) && $num1 > 0 && $num2 > 0) {
        $add = $num1 + $num2;
        $sub = $num1 - $num2;
        $mul = $num1 * $num2;
        $div = $num1 / $num2;
        $mod = $num1 % $num2;
        echo "<p>Wynik dodawania: $add</p>";
        echo "<p>Wynik odejmowania: $sub</p>";
        echo "<p>Wynik mnożenia: $mul</p>";
        echo "<p>Wynik dzielenia: $div</p>";
        echo "<p>Reszta z dzielenia: $mod</p>";
    } else {
        echo "<p>Wprowadź dwie liczby naturalne większe od zera.</p>";
    }
}
?>
</body>
</html>
