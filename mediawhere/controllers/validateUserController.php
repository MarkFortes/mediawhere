<?php
    if (isset($_POST["btnLogin"])) {

        require_once("../models/Connection.php");
        require_once("../models/UsersManagament.php");

        $username = $_POST["txtUsername"];
        $password = $_POST["txtPassword"];

        $conn = new Connection();

        if (UsersManagament::validateUser($conn, $username, $password) == true) {
          session_start();
          $_SESSION["username"] = $username;
          header("Location:../home.php");
        }else{
          header("Location:../error.php");
        }
    }
?>
