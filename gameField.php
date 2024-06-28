<link rel="stylesheet" href="style.css">
<?php
// var_dump($_SESSION['Schaltfläche_betätigt']);

for ($row = 1; $row <= 3; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 3; $col++) {
        $field = $row . $col;
        echo "<td>";
        echo "<button type='submit' name='feld' value='$field' "; // vlt. beides als $field variable abspeichern
        if (isset($_SESSION['button_disabled'][$field]) && $_SESSION['button_disabled'][$field]) { 
            echo "disabled";
        }
        echo ">";
        if (isset($_SESSION['Schaltfläche_betätigt'][$field])) {
            echo $_SESSION['Schaltfläche_betätigt'][$field];
        } else {
            echo '';
        }
        echo "</button>";
        echo "</td>";
    }
    echo "</tr>";
}
?>
