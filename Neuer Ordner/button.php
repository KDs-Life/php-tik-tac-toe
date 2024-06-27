<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<form method="POST" action="verarbeiten.php">
        <!-- Schaltfläche für Feld 00 -->
        <button type="submit" name="00" <?php echo isset($_SESSION['button_disabled']['00']) && $_SESSION['button_disabled']['00'] ? 'disabled' : ''; ?>>
            <!-- Zeigt X oder O an, wenn das Feld betätigt wurde, sonst bleibt es leer -->
            <?php echo isset($_SESSION['Schaltfläche betätigt']['00']) ? $_SESSION['Schaltfläche betätigt']['00'] : ''; ?>
        </button>
        
        <!-- Schaltfläche für Feld 01 -->
        <button type="submit" name="01" <?php echo isset($_SESSION['button_disabled']['01']) && $_SESSION['button_disabled']['01'] ? 'disabled' : ''; ?>>
            <!-- Zeigt X oder O an, wenn das Feld betätigt wurde, sonst bleibt es leer -->
            <?php echo isset($_SESSION['Schaltfläche betätigt']['01']) ? $_SESSION['Schaltfläche betätigt']['01'] : ''; ?>
        </button>
    </form>
   
   
    <form method="POST" action="verarbeiten.php">
        <button type="submit" name="reset">Reset</button>
    </form>

</body>

</html>