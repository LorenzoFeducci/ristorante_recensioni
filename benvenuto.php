<?php
    session_start();
    include('connessione.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<p>Benvenuto " .  $_SESSION['username'] . "</p>";
    ?>

    <a href="scriptlogout.php">Logout</a>
</body>
</html>