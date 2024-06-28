<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic Tac Toe</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

</head>

<body>

    <div class="container">
        <h1>
            Tic Tac Toe
        </h1>
      
        <form method="POST" action="verarbeiten.php">
            <table>
                <?php include 'gameField.php'; ?>
            </table>
        </form>

        
        <form method="POST" action="verarbeiten.php">
            <button type="submit" name="reset" class="resetButton">Reset</button>
        </form>
    </div>

</body>

</html>