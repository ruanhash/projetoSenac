<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header("Location: http://localhost:8080/projetosenac/src/php/login.php");
?>