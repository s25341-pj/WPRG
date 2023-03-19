<!DOCTYPE html>
<html>
<head>
    <title>Iloczyn skalarny</title>
</head>
<body>
<form method="post">
    <h3>Podaj rozmiary tablic A i B:</h3>
    n: <input type="number" name="n" required><br>
    m: <input type="number" name="m" required><br>
    <br><input type="submit" name="submit1" value="Sprawdź rozmiary tablic">
</form>
<?php
if (isset($_POST['submit1'])) {

    $n = $_POST['n'];
    $m = $_POST['m'];

    if ($n > 0 && $m > 0 && $n == $m) {
        echo "<form method='post'>";
        echo "<h3>Podaj wartości dla tablicy A:</h3>";
        for ($i=0; $i < $n; $i++) {
            echo "A[$i]: <input type='number' name='a[]' required><br>";
        }
        echo "<h3>Podaj wartości dla tablicy B:</h3>";
        for ($i=0; $i < $m; $i++) {
            echo "B[$i]: <input type='number' name='b[]' required><br>";
        }
        echo "<br><input type='submit' name='submit2' value='Oblicz iloczyn skalarny'>";
        echo "</form>";
    } else {
        echo "BŁĄD: Podane rozmiary tablic muszą być dodatnie, naturalne i takie same!";
        exit();
    }
} elseif (isset($_POST['submit2'])) {

    $a = $_POST['a'];
    $b = $_POST['b'];
    $n = count($a);
    $m = count($b);

    if ($n == $m) {
        $sum = 0;
        for ($i=0; $i < $n; $i++) {
            $sum += $a[$i] * $b[$i];
        }
        echo "<h3>Iloczyn skalarny:</h3>";
        echo "<p>$sum</p>";
    } else {
        echo "BŁĄD: Rozmiary tablic muszą być takie same!";
        exit();
    }
}
?>
</body>
</html>