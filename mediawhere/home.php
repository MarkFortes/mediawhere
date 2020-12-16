<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
    <?php
      session_start();
      if (!isset($_SESSION["username"])) {
        header("Location:index.php");
      }else {
        echo "¡BIENVENIDO!";
      }
    ?>
    <form action="controllers/logoutController.php" method="post">
        <input type="submit" name="btnLogout" value="Logout">
    </form>
  </body>
</html>
