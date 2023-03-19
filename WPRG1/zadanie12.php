<!DOCTYPE html>
<html>
<head>
    <title>Transpozycja macierzy</title>
</head>
<body>
<form method="post">
    <label for="rows">Liczba wierszy:</label>
    <input type="number" name="rows" id="rows" required value="<?php if(isset($_POST['rows'])) echo $_POST['rows']; ?>">
    <label for="cols">Liczba kolumn:</label>
    <input type="number" name="cols" id="cols" required value="<?php if(isset($_POST['cols'])) echo $_POST['cols']; ?>">
    <br><br>
    <label>Wartości macierzy:</label><br>
    <?php
    if(isset($_POST['submit'])){

        $rows = $_POST['rows'];
        $cols = $_POST['cols'];

        if($rows <= 0 || $cols <= 0){
            echo "BŁĄD";
        }else{
            echo "<table>";
            for($i=0;$i<$rows;$i++){
                echo "<tr>";
                for($j=0;$j<$cols;$j++){
                    echo "<td><input type='number' name='matrix[$i][$j]' required value='".(isset($_POST['matrix'][$i][$j]) ? $_POST['matrix'][$i][$j] : '')."'></td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            echo "<br><input type='submit' name='transpose' value='Transponuj'>";
        }
    }
    ?>
    <br><br>
    <?php
    if(isset($_POST['transpose'])){

        $matrix = $_POST['matrix'];
        $rows = count($matrix);
        $cols = count($matrix[0]);

        if($rows <= 0 || $cols <= 0){
            echo "BŁĄD";
        }else{
            echo "<table>";
            for($i=0;$i<$cols;$i++){
                echo "<tr>";
                for($j=0;$j<$rows;$j++){
                    echo "<td>".$matrix[$j][$i]."</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>