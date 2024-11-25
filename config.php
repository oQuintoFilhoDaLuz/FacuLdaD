<!-- config.php -->
<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPass = 'dearmama1996';
$dbname = 'login';

$mysqli = new mysqli($dbHost, $dbUsername, $dbPass, $dbname);

if ($mysqli->connect_errno) {
    echo "Erro de conexão: " . $mysqli->connect_error;
}
?>
