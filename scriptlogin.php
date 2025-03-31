<?php
    session_start();
    session_unset();
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
        $_SESSION["errore"] = " ";
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (empty($_POST["username"]) || empty($_POST["password"])) {
            $_SESSION["errore"] = "Compila tutti i campi";
            header("Location: errore_loginreg.php");
        }
        
        $sql = "SELECT username, password FROM utente WHERE username = '$username'";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            if($row["password"] == $password){
                $_SESSION["username"] = $username;
                header("Location: benvenuto.php");
            }else{
                $_SESSION["errore"] = "password errata";
                header("Location: errore_loginreg.php");
            }
        }else{
            $_SESSION["errore"] = "username inesistente";
            header("Location: errore_loginreg.php");
        }

    ?>
</body>
</html>