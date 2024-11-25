<?php
include("config.php"); // Inclua seu arquivo de configuração do banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do carrinho enviados via POST
    $cart = json_decode($_POST['cart'], true);

    if (!empty($cart)) {
        foreach ($cart as $item) {
            $productId = $item['product_id'];
            $quantity = $item['quantity'];

            // Prepare a instrução SQL para inserir os dados na tabela 'compras'
            $stmt = $mysqli->prepare("INSERT INTO compras (produto_id, quantidade) VALUES (?, ?)");
            $stmt->bind_param("ii", $productId, $quantity);

            // Executa a instrução
            if (!$stmt->execute()) {
                echo "Erro ao registrar a compra: " . $stmt->error;
                exit;
            }
        }

        echo "Compra registrada com sucesso!";
    } else {
        echo "O carrinho está vazio.";
    }
} else {
    echo "Método não permitido.";
}
?>