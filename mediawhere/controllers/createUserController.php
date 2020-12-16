<?php
    if(isset($_POST["btnSignup"])){
        require_once("../models/Connection.php");
        require_once("../models/UsersManagament.php");

        $username = $_POST["txtUsername"];
        $password = $_POST["txtPassword"];

        $conn = new Connection();

        UsersManagament::createUser($conn, $username, $password);
        
        header("Location:../home.php");
    }
?>