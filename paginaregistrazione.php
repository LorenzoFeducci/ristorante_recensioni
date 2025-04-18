<?php
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REGISTRAZIONE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-info text-center mx-auto">
    <h1>REGISTRAZIONE</h1>
    <form action="scriptregistrazione.php" method="post">
        <h5>Username</h5>
        <input type="text" name="username" placeholder="Username" class="w-25">
        <h5 class="mt-4">Password</h5>
        <input type="password" name="password" placeholder="Password" class="w-25">
        <h5 class="mt-4">Nome</h5>
        <input type="text" name="nome" placeholder="Nome" class="w-25">
        <h5 class="mt-4">Cognome</h5>
        <input type="text" name="cognome" placeholder="Cognome" class="w-25">
        <h5 class="mt-4">Email</h5>
        <input type="email" name="email" placeholder="Email" class="w-25">
        <br>
        <input type="submit" placeholder="REGISTRATI" class="mt-4 text-primary">
    </form>

    <br>

    <?php
      if(isset($_SESSION["errore"])){
        echo "<p class='bg-danger'>" . $_SESSION["errore"]  . "</p>";
        unset($_SESSION['errore']);
      }
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>