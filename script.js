function submitPassword() {
    var passwordInput = document.getElementById('password-input');
    var errorMessage = document.getElementById('error-message');
  
    var password = passwordInput.value;
    // Aquí puedes cambiar la contraseña a tu preferencia
    var correctPassword = 'PostulacionAcademica';
  
    if (password === correctPassword) {
      // Mostrar el contenido principal si la contraseña es correcta
      document.getElementById('password-form').style.display = 'none';
      document.getElementById('main-content').style.display = 'block';
    } else {
      // Mostrar mensaje de error si la contraseña es incorrecta
      errorMessage.textContent = 'Contraseña incorrecta';
    }
  }
  