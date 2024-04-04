const download = document.querySelector(".download");
const dark = document.querySelector(".dark");
const light = document.querySelector(".ligth"); // Corrigir aqui (light, não ligth)
const qrContainer = document.querySelector("#qr-code");
const qrText = document.querySelector(".qr-text");
const shareBtn = document.querySelector(".share-btn");
const sizes = document.querySelector(".sizes");

dark.addEventListener("input", handleDarkColor);
light.addEventListener("input", handleLightColor); // Corrigir aqui (handleLightColor, não handleLigthColor)
qrText.addEventListener("input", handleQRText);
sizes.addEventListener("input", handleSize);
shareBtn.addEventListener("click", handleShare); // Corrigir aqui (click, não input)

const defaultUrl = "https://portifolio-joao-oliveira-ptbr.netlify.app/";
let colorLight = "#fff"; // Corrigir aqui (colorLight, não colorLigth)
let colorDark = "#000";
let text = defaultUrl;
let size = 400; // Ajustei o tamanho padrão para 400, já que você tem a opção "400 x 400" selecionada.

function handleDarkColor(e) {
  colorDark = e.target.value;
  generateQRCode();
}

function handleLightColor(e) {
  colorLight = e.target.value;
  generateQRCode();
}

function handleQRText(e) {
  const value = e.target.value;
  text = value || defaultUrl; // Usar defaultUrl se o valor for vazio
  generateQRCode();
}

function handleSize(e) {
  size = e.target.value;
  generateQRCode();
}

async function generateQRCode() {
  qrContainer.innerHTML = "";
  new QRCode("qr-code", {
    text,
    height: size, // Corrigir aqui (height, não heigth)
    width: size,
    colorLight,
    colorDark,
  });
  download.href = await resolveDataUrl();
}

async function handleShare() {
  try {
    const base64pdf = await resolvePdfDataUrl();
    const blob = await (await fetch(base64pdf)).blob();
    const file = new File([blob], "QRCode.pdf", {
      type: blob.type,
    });

    const data = {
      files: [file],
      title: text,
    };

    if (navigator.canShare && navigator.canShare(data)) {
      await navigator.share(data);
    } else {
      alert("Seu navegador não suporta a funcionalidade de compartilhamento.");
    }
  } catch (error) {
    alert("Ocorreu um erro ao tentar compartilhar.");
  }
}

function resolveDataUrl() {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      const img = document.querySelector("#qr-code img");
      if (img.currentSrc) {
        resolve(img.currentSrc);
      } else {
        const canvas = document.querySelector("canvas");
        resolve(canvas.toDataURL());
      }
    }, 50);
  });
}

function resolvePdfDataUrl() {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      const canvas = document.querySelector("canvas");
      const pdf = new jsPDF();
      const imageData = canvas.toDataURL("image/pdf"); // Ajuste aqui para "image/png"
      pdf.addImage(imageData, "PDF", 10, 10, size / 2, size / 2);
      resolve(pdf.output("dataurlstring"));
    }, 50);
  });
}


generateQRCode();
