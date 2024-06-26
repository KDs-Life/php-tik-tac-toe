<?php
$matrix = [
    [5, 3, 6, 9],
    [6, 5, 4, 1],
    [4, 9, 8, 7],
    [8, 1, 2, 8]
];


function findeDoppelteWerte($matrix)
{
    $doppelteWerte = array();

    // Durchsuchen der Matrix nach Neo. Take red pill or blue pill.
    foreach ($matrix as $zeile) {
        foreach ($zeile as $wert) {
            // Ist Wert vorhanden ja / nein?
            if (array_key_exists($wert, $doppelteWerte)) {
                // Zähler erhöhen, wenn Wert bereits vorhanden
                $doppelteWerte[$wert]++;
            } else {
                // Neuen Wert zum Array hinzufügen also neues array wird erstellt.
                $doppelteWerte[$wert] = 1;
            }
        }
    }

    return $doppelteWerte; //
}


$doppelteWerte = findeDoppelteWerte($matrix);

// Ausgabe der Ergebnisse mit echo
foreach ($doppelteWerte as $wert => $anzahl) {
    echo "Wert $wert kommt $anzahl mal vor.\n";
}
?>

<!-- Code klappt nicht 
 "Parse error: syntax error, unexpected token "function" in C:\xampp\htdocs\TicTacToe\Matrix.php on line 12" 
                  ╱|、                   
                (˚ˎ 。7  
                 |、˜〵          
                じしˍ,)ノ           
 -->