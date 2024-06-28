<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<ad>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="button.css">ad>

<body>

  
    <form method="POST" action="verarbeiten.php">
      
        <button type="submit" name="feld" value="11" 
        <?php 
        if (isset($_SESSION['button_disabled']['11']) && $_SESSION['button_disabled']['11']) {
            echo 'disabled';
        }
        ?>>
            <?php 
            if (isset($_SESSION['Schaltfläche_betätigt']['11'])) {
                echo $_SESSION['Schaltfläche_betätigt']['11'];
            } else {
                echo '';
            }
            ?>
        </button>

      
        <button type="submit" name="feld" value="12" 
        <?php 
        if (isset($_SESSION['button_disabled']['12']) && $_SESSION['button_disabled']['12']) {
            echo 'disabled';
        }
        ?>>
            <?php 
            if (isset($_SESSION['Schaltfläche_betätigt']['12'])) {
                echo $_SESSION['Schaltfläche_betätigt']['12'];
            } else {
                echo '';
            }
            ?>
        </button>
    </form>

  
    <form method="POST" action="verarbeiten.php">
        <button type="submit" name="reset">Reset</button>
    </form>

</body>

</html>
