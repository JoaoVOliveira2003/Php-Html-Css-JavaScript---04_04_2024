const  lengthSlider = document.querySelector(".pass-length input");
const  options = document.querySelectorAll(".option input");
const copyIcon = document.querySelector(".input-box span");
const passawordInput = document.querySelector(".input-box input");
const passIndicator = document.querySelector(".pass-indicator");
const generateBtn = document.querySelector(".generate-btn");

const characters = {
  lowercase: "abcdefghijklmnopqrstuvwxyz",
  uppercase: "ABCDEFGHIJKLMNOPQRSTUVWXYZ",
  numbers: "0123456789",
  symbols: "!$%&|[](){}:;.,*+-#@<>~"
}

const generatePassword = () =>{
  let staticPassword = "",
  randomPassaword = "",
  excludeDuplicate = false,
  passLength = lengthSlider.value;

  options.forEach(option =>{
    if(option.checked){
      if(option.id !== "exc-duplicate" && option.id !== "spaces"){
        staticPassword += characters[option.id];
      }else if(option.id === "spaces"){
        staticPassword += ` ${staticPassword}`
      }
      else{
        excludeDuplicate = true;
      }
    }
  });

  for(let i = 0 ;i < passLength ; i++){
    let randomChar = staticPassword[Math.floor(Math.random() * staticPassword.length)];
    if(excludeDuplicate){
      !randomPassaword.includes(randomChar) || randomChar == " " ?
      randomPassaword += randomChar: i--;
    } else {
      randomPassaword += randomChar;
    }
  }
  passawordInput.value= randomPassaword;
}

const updatePassIndicator = () =>{
passIndicator.id = lengthSlider.value <= 8? "weak" : lengthSlider.value <= 16 ? "medium": "strong";  
}

const updateSlider = () => {
  document.querySelector(".pass-length span").innerHTML = lengthSlider.value;
  generatePassword();
  updatePassIndicator();
}

updateSlider();

const copyPassaword = () => {
  navigator.clipboard.writeText(passawordInput.value);
  copyIcon.innerHTML = "check";
  copyIcon.style.color = "#4285f4";
  setTimeout(() => {
      copyIcon.innerText = "copy_all";
      copyIcon.style.color = "#707070";
  },1500);
}

copyIcon.addEventListener("click", copyPassaword);
lengthSlider.addEventListener("input", updateSlider);
generateBtn.addEventListener("click",generatePassword);