document.addEventListener('DOMContentLoaded', function() {
    // Obtener elementos del DOM
    const loginModal = document.getElementById('loginModal');
    const registerModal = document.getElementById('registerModal');
    const openLoginBtn = document.getElementById('openLoginModalBtn');
    const openRegisterFromLogin = document.getElementById('openRegisterFromLogin');
    const openLoginFromRegister = document.getElementById('openLoginFromRegister');
    const closeButtons = document.querySelectorAll('.close-modal, .close-modal-img');
    
    // Abrir modal de login
    openLoginBtn.onclick = function() {
      loginModal.style.display = 'block';
    }
    
    // Cambiar de login a registro
    openRegisterFromLogin.onclick = function(e) {
      e.preventDefault();
      loginModal.style.display = 'none';
      registerModal.style.display = 'block';
    }
    
    // Cambiar de registro a login
    openLoginFromRegister.onclick = function(e) {
      e.preventDefault();
      registerModal.style.display = 'none';
      loginModal.style.display = 'block';
    }
    
    // Cerrar modales
    closeButtons.forEach(function(button) {
      button.onclick = function() {
        loginModal.style.display = 'none';
        registerModal.style.display = 'none';
      }
    });
    
    // Cerrar al hacer clic fuera del modal
    window.onclick = function(event) {
      if (event.target == loginModal) {
        loginModal.style.display = 'none';
      }
      if (event.target == registerModal) {
        registerModal.style.display = 'none';
      }
    }
  });