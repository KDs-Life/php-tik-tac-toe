<?php
session_start();


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
        
        $feld = $_POST['feld'];
        
        if ($_SESSION['Schaltfläche_betätigt'][$feld] === '') {
            if ($_SESSION['Zug'] % 2 != 0) {
                // Ungerade Züge sind "X"
                $_SESSION['Schaltfläche_betätigt'][$feld] = 'X';
            } else {
                // Gerade Züge sind "O"
                $_SESSION['Schaltfläche_betätigt'][$feld] = 'O';
            }
            $_SESSION['Zug']++; 
        }
        $_SESSION['button_disabled'][$feld] = true;
    } elseif (isset($_POST['reset'])) {
        session_unset();
        // session_destroy();

    }





    header('Location: start.php');
    exit();
}
?>