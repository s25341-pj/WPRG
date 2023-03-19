<!DOCTYPE html>
<html>
<head>
    <title>Wzory</title>
</head>
<body>
<?php
if (isset($_POST['submit'])) {

    $n = $_POST['n'];

    if ($n > 0 && is_numeric($n)) {
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
        for ($i = 1; $i <= $n; $i++) {
            for ($j = $i; $j <= $n; $j++) {
                echo "*";
            }
            echo "<br>";
        }
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j < $i; $j++) {
                echo "&nbsp;&nbsp;";
            }
            for ($j = $i; $j <= $n; $j++) {
                echo "*";
            }
            echo "<br>";
        }
        for ($i = 1; $i <= $n; $i++) {
            for ($j = $i; $j < $n; $j++) {
                echo "&nbsp;&nbsp;";
            }
            for ($j = $i; $j >= 1; $j--) {
                echo "*";
            }
            echo "<br>";
        }
    } else {
        echo "BŁĄD! Podaj dodatnią liczbę naturalną.<br>";
    }
}
?>
<form method="post">
    Podaj liczbę naturalną: <input type="number" name="n" min="1" step="1"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>





