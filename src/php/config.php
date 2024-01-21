<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'fithero';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao -> connect_errno) {
    echo "erro";
} {
    echo "Sucesso";
}

?>