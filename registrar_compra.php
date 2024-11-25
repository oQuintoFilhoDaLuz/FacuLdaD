<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cart = json_decode($_POST['cart'], true);

    if (!empty($cart)) {
        foreach ($cart as $item) {
            $productId = $item['product_id'];
            $quantity = $item['quantity'];

            $stmt = $mysqli->prepare("INSERT INTO compras (produto_id, quantidade) VALUES (?, ?)");
            $stmt->bind_param("ii", $productId, $quantity);

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