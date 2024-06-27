<?php
session_start();

// Initialisieren der Session-Variablen, wenn sie noch nicht gesetzt sind
if (!isset($_SESSION['Schaltfläche betätigt'])) {
    $_SESSION['Schaltfläche betätigt'] = array('00' => '', '01' => '');
    $_SESSION['Zug'] = 1;
    $_SESSION['button_disabled'] = array('00' => false, '01' => false);
}

// Prüfen, ob eine POST-Anfrage gesendet wurde
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['00'])) {
        // Wenn eine Schaltfläche im Spielfeld geklickt wurde
        $feld = '00';

        if ($_SESSION['Schaltfläche betätigt'][$feld] === '') {
            if ($_SESSION['Zug'] % 2 != 0) {
                // Ungerade Züge sind "X"
                $_SESSION['Schaltfläche betätigt'][$feld] = 'X';
            } else {
                // Gerade Züge sind "O"
                $_SESSION['Schaltfläche betätigt'][$feld] = 'O';
            }
            $_SESSION['Zug']++; // Erhöht den Zugzähler um 1
        }
        $_SESSION['button_disabled'][$feld] = true;
    }

    if (isset($_POST['01'])) {
        // Wenn eine Schaltfläche im Spielfeld geklickt wurde
        $feld = '01';

        if ($_SESSION['Schaltfläche betätigt'][$feld] === '') {
            if ($_SESSION['Zug'] % 2 != 0) {
                // Ungerade Züge sind "X"
                $_SESSION['Schaltfläche betätigt'][$feld] = 'X';
            } else {
                // Gerade Züge sind "O"
                $_SESSION['Schaltfläche betätigt'][$feld] = 'O';
            }
            $_SESSION['Zug']++; // Erhöht den Zugzähler um 1
        }
        $_SESSION['button_disabled'][$feld] = true;
    }

    if (isset($_POST['reset'])) {
        session_unset();
        header('Location: button.php');
        exit();
    }

    // Leitet zur selben Seite weiter, um die Änderungen zu zeigen
    header('Location: button.php');
    exit();
}
?>
