<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class=>
    <?php
        echo "<p>" . $_SESSION["errore"] . "</p>";
        unset($_SESSION['errore']);
    ?>

    <a href="paginalogin.html">PAGINA LOGIN</a>
    <br>
    <br>
    <a href="paginaregistrazione.html">PAGINA REGISTRAZIONE</a>
</body>
</html>