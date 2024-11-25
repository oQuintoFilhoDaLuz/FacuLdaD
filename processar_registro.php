<!-- processar_registro.php -->
<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $mysqli->real_escape_string($_POST['usuario']);
    $senha = $mysqli->real_escape_string($_POST['senha']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $numero = $mysqli->real_escape_string($_POST['numero']);

    $sql_code = "INSERT INTO usuarios (nome, Senha, email, numero) VALUES ('$usuario', '$senha', '$email', '$numero')";
    $sql_query = $mysqli->query($sql_code);

    if ($sql_query) {
        
        header("Location: index.php");
        exit(); 
    } else {
        echo "Erro ao inserir registro: " . $mysqli->error;
    }
}
?>
