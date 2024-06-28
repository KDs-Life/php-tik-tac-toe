<?php
session_start();

// Initialisieren der Session-Variablen, wenn sie noch nicht gesetzt sind
if (!isset($_SESSION['Schaltfläche_betätigt'])) {
    $_SESSION['Schaltfläche_betätigt'] = [];
    for ($row = 1; $row <= 3; $row++) {
        for ($col = 1; $col <= 3; $col++) {
            $field = $row . $col;
            $_SESSION['Schaltfläche_betätigt'][$field] = '';
        }
    }
    $_SESSION['Zug'] = 1;
    $_SESSION['button_disabled'] = [];
    for ($row = 1; $row <= 3; $row++) {
        for ($col = 1; $col <= 3; $col++) {
            $field = $row . $col;
            $_SESSION['Schaltfläche_betätigt'][$field] = '';
        }
    }
    
}

// Prüfen, ob eine POST-Anfrage gesendet wurde
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['feld'])) {
        // Wenn eine Schaltfläche im Spielfeld geklickt wurde
        $feld = $_POST['feld'];
        // var_dump($_SESSION['Schaltfläche_betätigt'][$feld] );
        if ($_SESSION['Schaltfläche_betätigt'][$feld] === '') {
            if ($_SESSION['Zug'] % 2 != 0) {
                // Ungerade Züge sind "X"
                $_SESSION['Schaltfläche_betätigt'][$feld] = 'X';
            } else {
                // Gerade Züge sind "O"
                $_SESSION['Schaltfläche_betätigt'][$feld] = 'O';
            }
            $_SESSION['Zug']++; // Erhöht den Zugzähler um 1
        }
        $_SESSION['button_disabled'][$feld] = true;
    } elseif (isset($_POST['reset'])) {
        session_unset();
        // session_destroy();

    }



    // Leitet zur selben Seite weiter, um die Änderungen zu zeigen

    header('Location: start.php');
    exit();
}
?>