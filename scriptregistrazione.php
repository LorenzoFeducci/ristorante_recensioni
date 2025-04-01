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
        $_SESSION["errore"] = "";
        $username = $_POST["username"];
        $password = $_POST["password"];
        $nome = $_POST["nome"];
        $cognome = $_POST["cognome"];
        $email = $_POST["email"];
        $passwordHash = hash("sha256", $password);

        if (empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["nome"]) || empty($_POST["cognome"])  || empty($_POST["email"])) {
            $_SESSION["errore"] = "Compila tutti i campi";
            header("Location: errore_loginreg.php");
            exit;
        }
        
        $sql = "SELECT username, email FROM utente WHERE username = '$username'";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            $_SESSION["errore"] = "username già esistente";
            header("Location: errore_loginreg.php");
        }else{
            $sql2 = "SELECT username, email FROM utente WHERE email = '$email'";
            $result2 = $conn->query($sql2);

            if($result2->num_rows > 0){
                $_SESSION["errore"] = "email già esistente";
                header("Location: errore_loginreg.php");
            }else{
                $_SESSION["username"] = $username;
                header("Location: benvenuto.php");
            }
        }
    ?>
</body>
</html>