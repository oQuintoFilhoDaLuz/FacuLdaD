<!-- tela_reg.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Livraria Arm Lock</title>
    <link rel="stylesheet" href="styles_reg.css">
</head>
<body>
    <div class="box">
        <span class="borderLine"></span>
        <form id="loginForm" action="processar_registro.php" method="POST">
            <h2>Registre-se</h2>
            <div class="inputBox">
                <label for="username">Nome</label>
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
            <div class="inputBox">
                <label for="email">E-mail</label>
                <input id="email" name="email" type="email" required="required">
                <span></span>
                <i></i>
            </div>
            <div class="inputBox">
                <label for="number">Número</label>
                <input id="number" name="numero" type="text" required="required">
                <span></span>
                <i></i>
            </div>
            <input type="submit" value="Pronto">
        </form>
    </div>
</body>
</html>
