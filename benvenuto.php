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
    <ul>
    <?php
        echo "<p>Benvenuto " .  $_SESSION['username'] . "</p>";

        $sql = "SELECT * FROM utente WHERE username = '" . $_SESSION['username'] . "'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

            echo "<li>Id: " . $row["id"] . "</li>";
            echo "<li>Username: " . $row["username"] . "</li>";
            echo "<li>Password: " . $row["password"] . "</li>";
            echo "<li>Nome: " . $row["nome"] . "</li>";
            echo "<li>Cognome: " . $row["cognome"] . "</li>";
            echo "<li>Email: " . $row["email"] . "</li>";
            echo "<li>Data di registrazione: " . $row["dataregistrazione"] . "</li>";
            
    ?>  
    </ul>

    <a href="scriptlogout.php">Logout</a>
</body>
</html>