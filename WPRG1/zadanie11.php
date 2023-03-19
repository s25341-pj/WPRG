<!DOCTYPE html>
<html>
<head>
    <title>Sprawdź pangram</title>
    <meta charset="utf-8">
</head>
<body>
<form method="post">
    <label for="text">Wpisz tekst:</label>
    <input type="text" id="text" name="text" required>
    <input type="submit" value="Submit">
</form>
<?php
if(isset($_POST['text'])){

    $text = strtolower($_POST['text']);
    $alphabet = range('a', 'z');

    foreach($alphabet as $letter){
        if(strpos($text, $letter) === false){
            echo "false";
            exit;
        }
    }
    echo "true";
}
?>
</body>
</html>