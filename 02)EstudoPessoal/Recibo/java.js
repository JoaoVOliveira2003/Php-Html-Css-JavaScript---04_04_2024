
function escreverExtenso() {
  var numeroInput = document.getElementById('numero');
  var extensaoInput = document.getElementById('extensao');
  var numero = parseInt(numeroInput.value);
  var extensao = converterParaExtenso(numero);
  extensaoInput.value = extensao;
  document.getElementById('recibo_extensao').innerHTML = extensao;
}

function atualizarInputExtensao() {
  var extensaoInput = document.getElementById('extensao');
  var extensao = document.getElementById('recibo_extensao').textContent;
  extensaoInput.value = extensao;
}

function atualizarExtensao() {
  var extensaoInput = document.getElementById('extensao');
  var extensao = extensaoInput.value;
  extensaoInput.value = extensao;
  document.getElementById('recibo_extensao').innerHTML = extensao;
}


function mostrarCampoPersonalizado(select) {
var campoPersonalizado = document.getElementById("campoPersonalizado");
if (select.value === "outro") {
campoPersonalizado.style.display = "block";
} else {
campoPersonalizado.style.display = "none";
}
}

function mostrarCampoPersonalizado(select) {
var campoPersonalizado = document.getElementById("campoPersonalizado");
if (select.value === "outro") {
campoPersonalizado.style.display = "block";
} else {
campoPersonalizado.style.display = "none";
}
}

function verRecibo() {
document.getElementById('recibo_nome').innerHTML = document.getElementById('nome').value;
document.getElementById('recibo_extensao').innerHTML = document.getElementById('recibo_extensao').textContent;

var referenteSelect = document.getElementById('referente');
var referenteValue = referenteSelect.options[referenteSelect.selectedIndex].value;
if (referenteValue === 'outro') {
document.getElementById('recibo_referente').innerHTML = document.getElementById('referentePersonalizado').value;
} else {
document.getElementById('recibo_referente').innerHTML = referenteValue;
}

document.getElementById('recibo_endereco').innerHTML = document.getElementById('endereco').value;
document.getElementById('recibo_data').innerHTML = document.getElementById('data').value;
document.getElementById('recibo_cp').innerHTML = document.getElementById('cp').value;
document.getElementById('recibo_codigo').innerHTML = document.getElementById('codigo').value;

var parcelaSelect = document.getElementById('parcela');
var parcelaValue = parcelaSelect.options[parcelaSelect.selectedIndex].value;
if (parcelaValue === 'outro') {
document.getElementById('recibo_parcela').innerHTML = document.getElementById('parcelaPersonalizado').value;
} else {
document.getElementById('recibo_parcela').innerHTML = parcelaValue;
}


document.getElementById('recibo_numero').innerHTML = document.getElementById('numero').value;
  
}

function gerarRecibo() {
document.getElementById('recibo_nome').innerHTML = document.getElementById('nome').value;
document.getElementById('recibo_extensao').innerHTML = document.getElementById('recibo_extensao').textContent;
var referenteSelect = document.getElementById('referente');
var referenteValue = referenteSelect.options[referenteSelect.selectedIndex].value;
if (referenteValue === 'outro') {
document.getElementById('recibo_referente').innerHTML = document.getElementById('referentePersonalizado').value;
} else {
document.getElementById('recibo_referente').innerHTML = referenteValue;
}

document.getElementById('recibo_endereco').innerHTML = document.getElementById('endereco').value;
document.getElementById('recibo_data').innerHTML = document.getElementById('data').value;
document.getElementById('recibo_cp').innerHTML = document.getElementById('cp').value;
document.getElementById('recibo_codigo').innerHTML = document.getElementById('codigo').value;

var parcelaSelect = document.getElementById('parcela');
var parcelaValue = parcelaSelect.options[parcelaSelect.selectedIndex].value;
if (parcelaValue === 'outro') {
document.getElementById('recibo_parcela').innerHTML = document.getElementById('parcelaPersonalizado').value;
} else {
document.getElementById('recibo_parcela').innerHTML = parcelaValue;
}


document.getElementById('recibo_numero').innerHTML = document.getElementById('numero').value;

window.print();
}

function converterParaExtenso(numero) {
  var unidades = ['', 'hum', 'dois', 'três', 'quatro', 'cinco', 'seis', 'sete', 'oito', 'nove'];
  var especiais = ['', 'onze', 'doze', 'treze', 'quatorze', 'quinze', 'dezesseis', 'dezessete', 'dezoito', 'dezenove'];
  var dezenas = ['', '', 'vinte', 'trinta', 'quarenta', 'cinquenta', 'sessenta', 'setenta', 'oitenta', 'noventa'];
  var centenas = ['', 'cento', 'duzentos', 'trezentos', 'quatrocentos', 'quinhentos', 'seiscentos', 'setecentos', 'oitocentos', 'novecentos'];
  var milhares = ['', 'mil', 'dois mil', 'três mil', 'quatro mil', 'cinco mil', 'seis mil', 'sete mil', 'oito mil', 'nove mil'];

  if (numero === 0) {
    return 'zero';
  } else if (numero < 10) {
    return unidades[numero];
  } else if (numero < 20) {
    return especiais[numero - 10];
  } else if (numero < 100) {
    var dezena = Math.floor(numero / 10);
    var unidade = numero % 10;
    if (unidade === 0) {
      return dezenas[dezena];
    } else {
      return dezenas[dezena] + ' e ' + unidades[unidade];
    }
  } else if (numero < 1000) {
    var centena = Math.floor(numero / 100);
    var resto = numero % 100;
    if (resto === 0) {
      return centenas[centena];
    } else {
      return centenas[centena] + ' e ' + converterParaExtenso(resto);
    }
  } else if (numero < 10000) {
    var milhar = Math.floor(numero / 1000);
    var resto = numero % 1000;
    if (resto === 0) {
      return milhares[milhar];
    } else {
      var extensoMilhar = milhares[milhar];
      var extensoResto = converterParaExtenso(resto);
      return extensoMilhar + ' e ' + extensoResto;
    }
  } else {
    return 'Número inválido';
  }
}

