document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.signup-form');
    const nameInput = document.querySelector('[placeholder="Nome"]');
    const lastNameInput = document.querySelector('[placeholder="Sobrenome"]');
    const emailInput = document.querySelector('[placeholder="Email"]');
    const phoneInput = document.querySelector('[placeholder="Telefone"]');
    const cepInput = document.querySelector('[placeholder="CEP"]');
    const addressInput = document.querySelector('[placeholder="Endereço"]');
    const passwordInput = document.querySelector('[placeholder="Senha"]');
    const confirmPasswordInput = document.querySelector('[placeholder="Confirmar Senha"]');
    
    form.addEventListener('submit', function(event) {
      if (!nameInput.value || !lastNameInput.value || !emailInput.value || !phoneInput.value || !cepInput.value || !addressInput.value || !passwordInput.value || !confirmPasswordInput.value) {
        event.preventDefault();
        alert('Por favor, preencha todos os campos.');
      } else if (passwordInput.value !== confirmPasswordInput.value) {
        event.preventDefault();
        alert('As senhas não coincidem. Por favor, verifique novamente.');
      }
    });
  });
  