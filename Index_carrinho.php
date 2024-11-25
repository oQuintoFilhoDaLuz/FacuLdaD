<!-- Index_carrinho.php -->
<?php
include("config.php");
include("protect.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho Online</title>
    <link rel="stylesheet" href="style_car.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="title">Biblioteca</div>
            <div class="header-right">
                <div class="icon-cart">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1"/>
                    </svg>
                    <span>0</span>
                </div>
                <a class="logout-btn" href="biblioteca.php">Voltar</a>
            </div>
        </header> 
        <div class="listProduct">
        </div>
    </div>
    <div class="cartTab">
        <h1>Carrinho</h1>
        <div class="listCart">
        </div>
        <div class="btn">
        <button class="close">Registrar a Compra</button>
<button class="checkOut">Efetuar Pagamento</button>

        </div>
    </div>

    

    <!--  link do QR code -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2>Código PIX</h2>
            <p>copie o link abaixo para fazer o pagamento:</p>
            Logo Após a confirmação do pagamento 
            O Ebook sera enviados atraves do E-mail:</p>


            <input type="text" value="00020126330014BR.GOV.BCB.PIX0111074485671015204000053039865802BR5925Guilherme Pereira Barbosa6009SAO PAULO62140510bsk3XOCpnG6304D735" id="pixLink" readonly>
            <button class="copy-link">Copiar</button>
        </div>
    </div>

    <script src="loja.js"></script>
</body>
</html>
