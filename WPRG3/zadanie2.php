<!DOCTYPE html>
<html>
<head>
    <title>Formularz zapisujący dane do pliku</title>
</head>
<body>
<h1>Formularz zapisujący dane do pliku</h1>
<?php
if (isset($_POST['submit'])) {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];

    $file = fopen("dane.txt", "a");
    fwrite($file, "$imie $nazwisko\n");
    fclose($file);

    echo "Dane zostały zapisane do pliku.";
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="imie">Imię:</label>
    <input type="text" name="imie" id="imie">

    <label for="nazwisko">Nazwisko:</label>
    <input type="text" name="nazwisko" id="nazwisko">

    <button type="submit" name="submit">Zapisz</button>
</form>
</body>
</html>
