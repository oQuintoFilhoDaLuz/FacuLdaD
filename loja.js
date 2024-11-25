let modal = document.getElementById("modal");
let btnCheckOut = document.querySelector(".checkOut");
let spanCloseModal = document.querySelector(".close-modal");
let copyButton = document.querySelector(".copy-link");
let pixLink = document.getElementById("pixLink");

// Exibir modal ao clicar no botão de checkout
btnCheckOut.addEventListener("click", () => {
    const cartData = localStorage.getItem("cart");

    if (cartData) {
        // Enviar os dados do carrinho para o backend para salvá-los no banco de dados
        fetch("processar_carrinho.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({ cart: JSON.parse(cartData) }),
        })
        .then((response) => response.text())
        .then((data) => {
            console.log("Dados enviados para o banco de dados:", data);
            alert("Compra processada com sucesso!"); // Mensagem de confirmação para o usuário
            modal.style.display = "block"; // Exibir o modal
        })
        .catch((error) => {
            console.error("Erro ao processar o carrinho:", error);
            alert("Ocorreu um erro ao processar o carrinho.");
        });
    } else {
        alert("O carrinho está vazio.");
    }
});

// Fechar modal ao clicar no "x"
spanCloseModal.addEventListener("click", () => {
    modal.style.display = "none";
});

// Fechar modal ao clicar fora dele
window.addEventListener("click", (event) => {
    if (event.target == modal) {
        modal.style.display = "none";
    }
});

// Copiar o link do Pix para a área de transferência
copyButton.addEventListener("click", () => {
    pixLink.select();
    document.execCommand("copy");
    alert("Link copiado para a área de transferência!");
});
