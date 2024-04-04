function verificar(){ 
  var data = new Date();
  var ano = data.getFullYear();
  var fano = document.getElementById('txtano');
  var res = document.querySelector('div#res');

  if (fano.value.length == 0 || fano.value > ano) {
    window.alert("[ERRO] insira ano correto");
  } else {
  var fsex = document.getElementsByName('radsex')
  var idade = ano - Number(fano.value)
  var genero = ''
  var img = document.createElement('img')
  img.setAttribute('id','foto')
  if(fsex[0].checked){
    genero='homem'
    if (idade >= 0 && idade < 10) {
      // Criança
      res.innerHTML = `é uma HOMEM que é CRIANÇA`
      img.setAttribute('src', 'imag/crianca.jpeg');
    } else if (idade >= 10 && idade < 25) {
      // Jovem
      res.innerHTML = `é uma HOMEM que é JOVEM`
      img.setAttribute('src', 'imag/jovem.jpeg');
    } else if (idade >= 25 && idade <= 40) {
      // Adulto
      res.innerHTML = `é uma HOMEM que é ADULTO`
      img.setAttribute('src', 'imag/adulto.jpeg');
    } else {
      // Idoso
      
      res.innerHTML = `é uma HOMEM que é IDOSA`
      img.setAttribute('src', 'imag/idoso.jpeg');
    }

  }else if(fsex[1].checked){
    genero='mulher'
    if (idade >= 0 && idade < 10) {
      // Criança
      img.setAttribute('src', 'Exercicio_de_idade/veiamuie.jpg');
    
      res.innerHTML = `é uma mulher que é criança`
    } else if (idade >= 10 && idade < 25) {
      // Jovem
      res.innerHTML = `é uma mulher que é JOVEM`

    } else if (idade >= 25 && idade <= 40) {
      // Adulto
      
      res.innerHTML = `é uma mulher que é ADULTA`
      img.setAttribute('src', 'imag/adulto.jpeg');
    } else {
      // Idoso
     
      res.innerHTML = `é uma mulher que é IDOSA`
      img.setAttribute('src', 'imag/idoso.jpeg');
    }
    
  } 
 
  res.appendChild(img)

  }
}