<?php
session_start();


if (!isset($_SESSION['Schaltfläche betätigt'])) {
    $_SESSION['Schaltfläche betätigt'] = '';
    $_SESSION['button_disabled'] = false;
}

// Prüfen, ob eine POST-Anfrage gesendet wurde
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['00'])) {
        // Wenn eine Schaltfläche im Spielfeld geklickt wurde
        $feld = (int) $_POST['00']; // Konvertiert den Feldnamen in eine Zahl

        if ($_SESSION['Schaltfläche betätigt'][$feld] === '') {
            if ($_SESSION['Zug'] % 2 != 0) { /* diese Bedingung prüft, ob der Zug ungerade ist, % ist der Modulo-Operator, der den Rest einer Division zurückgibt.
                und != bedeutet ungleich
                */
                // Ungerade Züge sind "X"
                $_SESSION['Schaltfläche betätigt'][$feld] = 'X';
            } else {
                // Gerade Züge sind "O"
                $_SESSION['Schaltfläche betätigt'][$feld] = 'O';
            }
            $_SESSION['Zug']++; // Erhöht den Zugzähler um 1
        }
        if (isset($_POST['01'])) {
            // Wenn eine Schaltfläche im Spielfeld geklickt wurde
            $feld = (int) $_POST['01']; // Konvertiert den Feldnamen in eine Zahl
    
            if ($_SESSION['Schaltfläche betätigt'][$feld] === '') {
                if ($_SESSION['Zug'] % 2 != 0) { /* diese Bedingung prüft, ob der Zug ungerade ist, % ist der Modulo-Operator, der den Rest einer Division zurückgibt.
                    und != bedeutet ungleich
                    */
                    // Ungerade Züge sind "X"
                    $_SESSION['Schaltfläche betätigt'][$feld] = 'X';
                } else {
                    // Gerade Züge sind "O"
                    $_SESSION['Schaltfläche betätigt'][$feld] = 'O';
                }
                $_SESSION['Zug']++; // Erhöht den Zugzähler um 1
            }
            
        }
    } elseif (isset($_POST['reset'])) {
        // eine Reset-Button und Rückleitung zu buton.php einbauen und header funktion nutzen um zurückzuleiten mit exit()
        $_SESSION['Schaltfläche betätigt'] = ''; //die Schaltfläche muss man zurücksetzen können, wenn der Reset-Button geklickt wurde. zum startwert also X zurücksetzen
        $_SESSION['button_disabled'] = false;
        $_SESSION['Zug'] = 1; // Setzt den Zugzähler zurück
    }
} // session unset oder destroy vlt. nutzen
header('Location: button.php'); // Leitet zur selben Seite weiter, um die Änderungen zu zeigen
exit();

if (isset($_POST["00"])) {
    echo "";
}
?>