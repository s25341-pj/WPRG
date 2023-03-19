<!DOCTYPE html>
<html>
<head>
    <title>Program wyświetlający miesiąc i ilość dni</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Liczba od 1 do 12: <input type="number" name="month" min="1" max="12" required><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $month = $_POST["month"];

    switch ($month) {
        case 1:
            echo "Styczeń ma 31 dni";
            break;
        case 2:
            echo "Luty ma 28 dni";
            break;
        case 3:
            echo "Marzec ma 31 dni";
            break;
        case 4:
            echo "Kwiecień ma 30 dni";
            break;
        case 5:
            echo "Maj ma 31 dni";
            break;
        case 6:
            echo "Czerwiec ma 30 dni";
            break;
        case 7:
            echo "Lipiec ma 31 dni";
            break;
        case 8:
            echo "Sierpień ma 31 dni";
            break;
        case 9:
            echo "Wrzesień ma 30 dni";
            break;
        case 10:
            echo "Październik ma 31 dni";
            break;
        case 11:
            echo "Listopad ma 30 dni";
            break;
        case 12:
            echo "Grudzień ma 31 dni";
            break;
        default:
            echo "BŁĄD: Wpisz liczbę od 1 do 12";
            break;
    }
}
?>
</body>
</html>