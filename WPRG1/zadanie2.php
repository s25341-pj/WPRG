<!DOCTYPE html>
<html>
<head>
    <title>Pole prostokąta</title>
</head>
<body>
<h1>Pole prostokąta</h1>
<form method="post" action="">
    <label for="a">Długość boku a:</label>
    <input type="number" id="a" name="a" min="0" step="any" required><br>
    <label for="b">Długość boku b:</label>
    <input type="number" id="b" name="b" min="0" step="any" required><br>
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $a = $_POST["a"];
    $b = $_POST["b"];

    if ($a <= 0 || $b <= 0) {
        echo "<p>Błędne dane. Wprowadź wyłącznie liczby dodatnie.</p>";
    } else {
        $area = $a * $b;
        echo "<p>Pole prostokąta o bokach $a i $b wynosi: $area</p>";
    }
}
?>
</body>
</html>