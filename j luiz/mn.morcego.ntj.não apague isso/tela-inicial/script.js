const loginsec=document.querySelector('.login-section')
const loginlink=document.querySelector('.login-link')
const registerlink=document.querySelector('.register-link')
registerlink.addEventListener('click',()=>{
    loginsec.classList.add('active')
})
loginlink.addEventListener('click',()=>{
    loginsec.classList.remove('active')
})

// Obtém o formulário de login do HTML
var loginForm = document.getElementById('login-form');

// Adiciona um ouvinte de evento para o envio do formulário
loginForm.addEventListener('submit', function(event) {
  event.preventDefault(); // Evita o comportamento padrão de envio do formulário

});

function login(){
  if(localStorage.getItem("email") == undefined || localStorage.getItem("password") == undefined){
    alert("Nenhum dado registrado")
  }else{
    if((localStorage.getItem("email") == document.getElementById('email').value) && (localStorage.getItem("password") == document.getElementById('password').value)){
      alert("Dados de login verificados")
    } else {
      alert("Dados de login invalidos")
    }
  }
}

function singup(){
  let user = document.getElementById('username').value
  let email = document.getElementById('emailCad').value
  let password = document.getElementById('pswCad').value

  localStorage.setItem('user', user)
  localStorage.setItem('email', email)
  localStorage.setItem('password', password)

  alert('Dados de login salvos com sucesso!')
}