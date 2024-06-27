<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic Tac Toe</title>
</head>

<body>

    <!-- Spielfeld Formular -->
    <form method="POST" action="verarbeiten.php">
        <!-- Schaltfläche für Feld 00 -->
        <button type="submit" name="feld" value="00" <?php echo isset($_SESSION['disabled']['00']) ? 'disabled' : ''; ?>>
            <?php echo $_SESSION['felder']['00'] ?? ''; ?>
        </button>

        <!-- Schaltfläche für Feld 01 -->
        <button type="submit" name="feld" value="01" <?php echo isset($_SESSION['disabled']['01']) ? 'disabled' : ''; ?>>
            <?php echo $_SESSION['felder']['01'] ?? ''; ?>
        </button>
    </form>

    <!-- Reset-Formular -->
    <form method="POST" action="verarbeiten.php">
        <button type="submit" name="reset">Reset</button>
    </form>

</body>

</html>
