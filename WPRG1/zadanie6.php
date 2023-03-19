<!DOCTYPE html>
<html>
<head>
    <title>Sprawdzanie trójkąta</title>
</head>
<body>
<h1>Sprawdzanie trójkąta</h1>
<form method="post" action="">
    <label for="a">Podaj długość boku a:</label>
    <input type="number" id="a" name="a" min="1" required><br>
    <label for="b">Podaj długość boku b:</label>
    <input type="number" id="b" name="b" min="1" required><br>
    <label for="c">Podaj długość boku c:</label>
    <input type="number" id="c" name="c" min="1" required><br>
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        echo "Z podanych boków da się zbudować trójkąt.";
    } else {
        echo "BŁĄD: Z podanych boków nie da się zbudować trójkąta.";
    }
}
?>
</body>
</html>
