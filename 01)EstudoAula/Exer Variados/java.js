function exer1() {
  var A = parseFloat(document.getElementById("numA").value);
  var B = parseFloat(document.getElementById("numB").value);
  var C = parseFloat(document.getElementById("numC").value);
  var D = parseFloat(document.getElementById("numD").value);
  var E = parseFloat(document.getElementById("numE").value);

  var valores = [A, B, C, D, E];
  var negativos = 0;

  for (var i = 0; i < valores.length; i++) {
      if (valores[i] < 0)
          negativos++;
  }
  document.getElementById("resul1").textContent = `A quantidade de números negativos é ${negativos}`;
}

function exer2(){
  var a = parseFloat(document.getElementById("preco").value);
  var b = parseFloat(document.getElementById("pago").value);
  var c= b/a;
  document.getElementById("resul2").innerHTML= `Você poderá conseguir ${c} litros de gasolina`
}

function exer3() {
  let alunos = []; // Array para armazenar os dados dos alunos

  // Ler os dados inseridos pelo usuário para cada aluno
  for (let i = 1; i <= 5; i++) {
      const nome = document.getElementById(`nomeAluno${i}`).value;
      const altura = parseInt(document.getElementById(`alturaAluno${i}`).value);

      alunos.push({ nome, altura });
  }

  // Função para encontrar o aluno mais alto
  function encontrarAlunoMaisAlto() {
      let alunoMaisAlto = alunos[0];
      for (let i = 1; i < alunos.length; i++) {
          if (alunos[i].altura > alunoMaisAlto.altura) {
              alunoMaisAlto = alunos[i];
          }
      }
      return alunoMaisAlto;
  }

  function encontrarAlunoMaisBaixo() {
      let alunoMaisBaixo = alunos[0];
      for (let i = 1; i < alunos.length; i++) {
          if (alunos[i].altura < alunoMaisBaixo.altura) {
              alunoMaisBaixo = alunos[i];
          }
      }
      return alunoMaisBaixo;
  }

  const alunoMaisAlto = encontrarAlunoMaisAlto();
  const alunoMaisBaixo = encontrarAlunoMaisBaixo();

  const resultadoDiv = document.getElementById("resul3");
  resultadoDiv.innerHTML = `
      Aluno mais alto: ${alunoMaisAlto.nome}, Altura ${alunoMaisAlto.altura} cm<br>
      Aluno mais baixo: ${alunoMaisBaixo.nome}, Altura ${alunoMaisBaixo.altura} cm`;
}



function exer4(){
  var a=0;

  for(var i = 0; i<=100; i++){
    a += i;
  }
  document.getElementById("resul4").innerHTML = `A soma dos números entre 0 e 100 é ${a}`;
}

function exer5(){
  var a = 0;

  for(var i = 0; i <= 100; i++){
    if(i % 2 === 0){
      a += i;
    }
  }
  document.getElementById("resul5").innerHTML = `A soma dos números pares entre 0 e 100 é ${a}`;
}

function exer6(){
  var a = parseFloat(document.getElementById("numeroFatorial").value);
  var resul = 1;

  for(var i = 1; i <= a; i++){
    resul *= i;
  }
  document.getElementById("resul6").innerHTML = `Fatorial de ${a} é ${resul}`;
}

const numeros = [];

function adicionarNumero() {
    const numero = parseInt(document.getElementById("numeroEntrada").value);

    if (!isNaN(numero) && numero >= 0) {
        numeros.push(numero);
        document.getElementById("numeroEntrada").value = "";
        document.getElementById("resultadoMedia").textContent = "";
    } else {
        alert("Por favor, insira um número inteiro e positivo.");
    }
}

function calcularMedia() {
    if (numeros.length === 0) {
        document.getElementById("resultadoMedia").textContent = "Nenhum número inserido.";
        return;
    }

    const soma = numeros.reduce((acumulador, numero) => acumulador + numero, 0);
    const media = soma / numeros.length;

    document.getElementById("resultadoMedia").textContent = `A média aritmética dos valores é: ${media.toFixed(2)}`;
}

function exer8() {
  var numero = parseInt(document.getElementById("numeroTabuada").value);
  var resultado = "";

  if (!isNaN(numero)) {
      for (var i = 1; i <= 10; i++) {
          var produto = numero * i;
          resultado += `${numero} x ${i} = ${produto}<br>`;
      }
      document.getElementById("resul8").innerHTML = resultado;
  } else {
      document.getElementById("resul8").innerHTML = "Por favor, insira um número válido.";
  }
}
