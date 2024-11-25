<!-- index.php -->
<?php
include("config.php");

if (isset($_POST["usuario"]) && isset($_POST["senha"])) {
    if (strlen($_POST["usuario"]) == 0) {
        echo "Preencha o usuário";
    } elseif (strlen($_POST["senha"]) == 0) {
        echo "Preencha a senha";
    } else {
        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE nome = '$usuario' AND Senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {
            $username = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION["id"] = $username['id'];
            $_SESSION["email"] = $username['email'];

            header("Location: biblioteca.php");
        } else {
            echo "Falha ao logar! Usuário ou senha incorretos";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Livraria Arm Lock</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="box">
        <span class="borderLine"></span>
        <form id="loginForm" action="" method="post">
            <h2>Login</h2>
            <div class="inputBox">
                <label for="username">Username</label>
                <input id="username" name="usuario" type="text" required="required">
                <span></span>
                <i></i>
            </div>
            <div class="inputBox">
                <label for="password">Senha</label>
                <input id="password" name="senha" type="password" required="required">
                <span></span>
                <i></i>
            </div>
            <div class="links">
                <a href="tela_reg.php">Register</a>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
