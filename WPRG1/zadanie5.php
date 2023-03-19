<!DOCTYPE html>
<html>
<head>
    <title>Łączenie napisów</title>
</head>
<body>
<h1>Łączenie napisów</h1>
<form method="post" action="">
    <label for="text">Podaj dwa napisy oddzielone spacją:</label>
    <input type="text" id="text" name="text" required><br>
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $text = $_POST["text"];

    list($napis1, $napis2) = explode(" ", $text);
    echo "%$napis2 $napis1%\$#";
}
?>
</body>
</html>