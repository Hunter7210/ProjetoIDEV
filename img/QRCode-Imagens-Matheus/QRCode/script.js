const showPopupButton = document.getElementById("showPopup");
const popup = document.getElementById("paymentPopup");
const closePopupButton = document.getElementById("closePopup");
const qrcodeContainer = document.getElementById("qrcode-container");

// Variável para rastrear se o QR Code já foi gerado
let qrCodeGenerated = false;

showPopupButton.addEventListener("click", () => {
    popup.style.display = "flex";
    
    // Gerar o QR Code apenas se ainda não tiver sido gerado
    if (!qrCodeGenerated) {
        generateQRCode();
        qrCodeGenerated = true;
    }
});

closePopupButton.addEventListener("click", () => {
    popup.style.display = "none";
});

// Função para gerar o QR Code
function generateQRCode() {
    const qrCode = new QRCode(qrcodeContainer, {
        text: "Texto ou link do QR Code aqui",
        width: 200,
        height: 200,
    });

    qrCode.makeCode("Texto ou link do QR Code aqui");
}

// Após escanear o QR Code e clicar no botão "Compra Concluída"
function completePurchase() {
    // Redirecionar para a página de compra concluída
    window.location.href = "compra_concluida.html";
}
