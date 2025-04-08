<?php
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-info text-center mx-auto">
    <h1>LOGIN</h1>
    <form action="scriptlogin.php" method="post">
        <h5>Username</h5>
        <input type="text" name="username" placeholder="Username" class="w-25">
        <h5 class="mt-4">Password</h5>
        <input type="password" name="password" placeholder="Password" class="w-25">
        <br>
        <input type="submit" placeholder="ACCEDI" class="mt-4 text-primary">
    </form>
    
    <br>

    <?php
    if(isset($_SESSION["errore"])){
      echo "<p class='bg-danger'>" . $_SESSION["errore"]  . "</p>";
      unset($_SESSION['errore']);
    }
        
    ?>

    <br>

    <a href="paginaregistrazione.php" class="border border-dark p-3 text-dark ">Registrati</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>