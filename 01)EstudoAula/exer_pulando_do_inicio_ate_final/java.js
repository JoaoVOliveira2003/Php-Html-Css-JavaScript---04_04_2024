function contar() {
  var inicio = document.getElementById('txtinicio');
  var final = document.getElementById('txtfim');
  var cont = document.getElementById('txtpasso');
  var resul = document.getElementById('res');

  if (inicio.value.length == 0 || final.value.length == 0 || cont.value.length == 0) {
    window.alert('Insira números em todos os campos');
  } else {
    resul.innerHTML = 'Contando...<br>';
    let ini = Number(inicio.value);
    let fim = Number(final.value);
    let contNumero = Number(cont.value);

    if (contNumero <= 0) {
      window.alert('O passo deve ser maior que zero. O passo foi definido como 1.');
      contNumero = 1;
    }

    if (ini <= fim) {
      for (let aux = ini; aux <= fim; aux += contNumero) {
        resul.innerHTML += `${aux} `;
      }
    } else { // Inverte a contagem quando ini > fim
      for (let aux = ini; aux >= fim; aux -= contNumero) {
        resul.innerHTML += ` ${aux} `;
      }
    }
  }
}
