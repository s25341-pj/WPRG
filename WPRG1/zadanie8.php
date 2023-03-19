<!DOCTYPE html>
<html>
<head>
    <title>Sortowanie liczb</title>
</head>
<body>
<form method="post">
    Podaj trzy liczby rzeczywiste:<br>
    <input type="number" step="0.01" name="num1"><br>
    <input type="number" step="0.01" name="num2"><br>
    <input type="number" step="0.01" name="num3"><br>
    <input type="submit" name="submit" value="Submit"><br>
</form>
<?php
if (isset($_POST['submit'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    $min = $num1;
    if ($num2 < $min) {
        $min = $num2;
    }
    if ($num3 < $min) {
        $min = $num3;
    }

    $max = $num1;
    if ($num2 > $max) {
        $max = $num2;
    }
    if ($num3 > $max) {
        $max = $num3;
    }

    echo "Liczby od najmniejszej do największej: $min, ";
    if (($num1 != $min) && ($num1 != $max)) {
        echo $num1 . ", ";
    }
    if (($num2 != $min) && ($num2 != $max)) {
        echo $num2 . ", ";
    }
    if (($num3 != $min) && ($num3 != $max)) {
        echo $num3 . ", ";
    }
    echo "$max<br>";

    echo "Liczby od największej do najmniejszej: $max, ";
    if (($num1 != $min) && ($num1 != $max)) {
        echo $num1 . ", ";
    }
    if (($num2 != $min) && ($num2 != $max)) {
        echo $num2 . ", ";
    }
    if (($num3 != $min) && ($num3 != $max)) {
        echo $num3 . ", ";
    }
    echo "$min";
}
?>
</body>
</html>