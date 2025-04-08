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
        $passwordHash = hash("sha256", $password);

        if (empty($_POST["username"]) || empty($_POST["password"])) {
            $_SESSION["errore"] = "Compila tutti i campi";
            header("Location: paginalogin.php");
            exit;
        }
        
        $sql = "SELECT username, password FROM utente WHERE username = '$username'";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            if($row["password"] == $passwordHash){
                $_SESSION["username"] = $username;
                header("Location: benvenuto.php");
            }else{
                $_SESSION["errore"] = "password errata";
                header("Location: paginalogin.php");
            }
        }else{
            $_SESSION["errore"] = "username inesistente";
            header("Location: paginalogin.php");
        }
        
    ?>
</body>
</html>