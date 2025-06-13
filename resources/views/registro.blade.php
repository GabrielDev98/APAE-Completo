<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta - Sistema GTI</title>
    <link rel="icon" href="images/APAE-icon.png" type="image/x-icon">
    @vite(['resources/css/registro.css'])
</head>
<body>
    <div class="flex justify-center items-center min-h-screen bg-blue-50">
        <div class="caixaLogin">
            <img id="imgAPAE" src="{{ asset('images/APAE.jpg') }}" alt="Logo do Sistema" width="200">
            
            <h2 class="text-2xl font-bold text-center mb-4 text-gray-800">Criar Nova Conta</h2>
            
            <form action="{{ route('salva-conta') }}" method="POST" class="w-full">
                @csrf
                
                <!-- Campo de Nome -->
                <div class="mb-4">
                    <input name="name" type="text" id="Nome" class="w-full px-4 py-2 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Seu Nome Completo" value="{{ old('name') }}" required>
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Campo de Email -->
                <div class="mb-4">
                    <input name="email" type="email" id="Email" class="w-full px-4 py-2 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="seu@email.com" value="{{ old('email') }}" required>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Campo de Senha -->
                <div class="senhaContainer mb-4">
                    <input name="password" type="password" id="Senha" class="w-full px-4 py-2 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Senha" required>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Campo de Confirmar Senha -->
                <div class="senhaContainer mb-4">
                    <input name="password_confirmation" type="password" id="ConfirmaSenha" class="w-full px-4 py-2 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Confirmar Senha" required>
                </div>
                
                <button type="submit" id="Registro" class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                    Criar Conta
                </button>
                
                <div id="mensagemErro" class="mensagem-erro mt-3">
                    <!-- Aqui podemos mostrar mensagens de erro gerais se necessário -->
                    @if(session('erro'))
                        <p class="text-red-500 text-xs mt-1">{{ session('erro') }}</p>
                    @endif
                </div>
            </form>
            
            <a href="/Main" class="btn btn-outline">Voltar</a>

        </div>
    </div>

    @vite(['resources/js/registro.js']) 
</body>
</html>
