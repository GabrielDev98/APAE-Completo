document.addEventListener('DOMContentLoaded', function() {
    // Elementos do DOM
    const inputSenha = document.getElementById("Senha");
    const inputConfirmaSenha = document.getElementById("ConfirmaSenha");
    const eyeButton = document.getElementById("olhoIcon");
    const registroButton = document.getElementById("Registro");
    const mensagemErro = document.getElementById("mensagemErro");

    // Ícones SVG
    const eyeOpenSVG = `
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
    </svg>`;

    const eyeClosedSVG = `
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
    </svg>`;

    // Configuração inicial
    eyeButton.innerHTML = eyeClosedSVG;

    // Funções de visibilidade da senha
    function togglePasswordVisibility(input) {
        if (input.type === "password") {
            input.type = "text";
            eyeButton.innerHTML = eyeOpenSVG;
        } else {
            input.type = "password";
            eyeButton.innerHTML = eyeClosedSVG;
        }
    }

    // Event listeners
    eyeButton.addEventListener("click", function() {
        togglePasswordVisibility(inputSenha);
    });

    // Validação do formulário
    registroButton.addEventListener("click", function(e) {
        e.preventDefault();
        
        const nome = document.getElementById("Nome").value.trim();
        const email = document.getElementById("Email").value.trim();
        const senha = inputSenha.value.trim();
        const confirmaSenha = inputConfirmaSenha.value.trim();
        
        mensagemErro.textContent = "";
        
        // Validações básicas
        if (!nome || !email || !senha || !confirmaSenha) {
            mensagemErro.textContent = "Todos os campos são obrigatórios!";
            return;
        }
        
        if (senha !== confirmaSenha) {
            mensagemErro.textContent = "As senhas não coincidem!";
            return;
        }
        
        if (senha.length < 8) {
            mensagemErro.textContent = "A senha deve ter pelo menos 8 caracteres!";
            return;
        }
        
        // Se tudo estiver válido, envia o formulário
        document.querySelector('form').submit();
    });

    // Permitir submit com Enter
    document.querySelectorAll('input').forEach(input => {
        input.addEventListener('keypress', function(e) {
            if (e.key === "Enter") {
                registroButton.click();
            }
        });
    });
});