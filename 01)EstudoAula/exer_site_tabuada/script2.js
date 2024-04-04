function tabuada(){
let num = document.getElementById('txtn')
let tab = document.getElementById('seltab')
if(num.value.length == 0){
window.alert('insira numero')
}else{
let n = Number(num.value) 
tab.innerHTML = ''
for(c=1;c<=10;c++){
  let item = document.createElement('option')
  item.text = `${c} * ${n} = ${c*n}`
  item.value = `tab${c}`
  tab.appendChild(item)
}
}
}