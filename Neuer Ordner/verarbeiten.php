<?php
session_start();

// Initialisieren der Session-Variablen, wenn sie noch nicht gesetzt sind
if (!isset($_SESSION['felder'])) {
    $_SESSION['felder'] = ['00' => '', '01' => ''];
    $_SESSION['zug'] = 1;
    
}

// Prüfen, ob eine POST-Anfrage gesendet wurde
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Spielfeld Logik
    if (isset($_POST['feld'])) {
        $feld = $_POST['feld'];

        if ($_SESSION['felder'][$feld] === '') {
            $_SESSION['felder'][$feld] = ($_SESSION['zug'] % 2 != 0) ? 'X' : 'O';
            $_SESSION['zug']++;
            $_SESSION['disabled'][$feld] = true;
        }
    }

    // Reset Logik
    if (isset($_POST['reset'])) {
        session_unset();
        
    }

    // Seite neu laden, um Änderungen zu zeigen
    header('Location: button.php');
    
}
?>
