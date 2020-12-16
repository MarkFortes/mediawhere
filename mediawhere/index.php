<html>
    <head>

    </head>
    <body>
        <h3>Login</h3>
        <form action="controllers/validateUserController.php" method="post">
            <label>Usuario:</label><input type="text" name="txtUsername" required>
            <label>Contraseña: </label><input type="password" name="txtPassword" required>
            <input type="submit" name="btnLogin" value="Acceder">
        </form>

        <h3>Signup</h3>
        <form action="controllers/createUserController.php" method="post">
            <label>Usuario:</label><input type="text" name="txtUsername" required>
            <label>Contraseña: </label><input type="password" name="txtPassword" required>
            <input type="submit" name="btnSignup" value="Registrar">
        </form>
    </body>
</html>
