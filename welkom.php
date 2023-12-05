<?php
session_start();

if (!isset($_SESSION['gebruikersnaam'])) {
    header("Location: log_in.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welkom</title>
</head>
<body>
    <p>Welkom, <?php echo $_SESSION['gebruikersnaam']; ?>!</p>
</body>
</html>
