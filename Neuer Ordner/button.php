
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
        <button type="submit" name="00" <?php isset($_SESSION['button_disabled']) ? 'disabled' : ''; ?>> 
            <?php echo isset($_SESSION['Schaltfläche betätigt']) ? $_SESSION['Schaltfläche betätigt'] : 'Button'; ?>
        </button>
        
    </form>
    
    <form method="POST" action="verarbeiten.php">
        <button type="submit" name="reset">Reset</button>
    </form>

</body>

</html>




<!-- <?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<form method="POST" action="verarbeiten.php">
    <button type="submit" name="00" <?php echo isset($_SESSION['button_disabled']) && $_SESSION['button_disabled'] ? 'disabled' : ''; ?>> 
        <?php echo isset($_SESSION['Schaltfläche betätigt'][00]) ? $_SESSION['Schaltfläche betätigt'][00] : 'Button'; ?>
    </button>
    <button type="submit" name="01" <?php echo isset($_SESSION['button_disabled']) && $_SESSION['button_disabled'] ? 'disabled' : ''; ?>> 
        <?php echo isset($_SESSION['Schaltfläche betätigt'][01]) ? $_SESSION['Schaltfläche betätigt'][01] : 'Button'; ?>
    </button>
</form>

<form method="POST" action="verarbeiten.php">
    <button type="submit" name="reset">Reset</button>
</form>

</body>

</html> -->
