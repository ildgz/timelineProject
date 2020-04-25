var myForm = document.querySelector('#my-form');
var usernameInput = document.querySelector('#form-username');
var passwordInput = document.querySelector('#form-password');
var msg = document.querySelector('.mydescription');
//const userList = document.querySelector('#users');

// Listen for form submit
myForm.addEventListener('submit', onSubmit);

function onSubmit(e) { 
  e.preventDefault();
  
  if(usernameInput.value === '' || passwordInput.value === '') {
    // alert('Please enter all fields');
    msg.classList.add('error'); // NO FUNCIONA
    msg.innerHTML = 'Please enter all fields';
    //msg.textContent = 'Please enter all fields';

    // Remove error after 3 seconds
    setTimeout(() => msg.remove(), 3000);

    
  } else {

    // enviarlo
    myForm.submit();

    // Clear fields
    //console.log(usernameInput.value);
    //console.log(passwordInput.value);
    usernameInput.value = '';
    passwordInput.value = '';
 }
}

// PROBLEMA se desplaza y desaparece el campo username y queda visible sólo el campo password.
// RESUELTO 24042020 usando clase mydescription en querySelector

// PROBLEMA no entra a pesar de que usr y pass sean correctos (sí lo hace quitando el js).
// RESUELTO 24042020 cambiando const myForm por var

// PROBLEMA si faltan campos sólo muestra el mensaje una vez
// PROBLEMA entra aunque el usuario no exista ERROR DE VALIDACION EN user.php