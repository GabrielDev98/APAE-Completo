<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="images/APAE-icon.png" type="image/x-icon">
    @vite(['resources/css/login.css'])
</head>
<body>
    <div class="caixaLogin">
        <div id="imgAPAE">
            <img id="imgAPAE" src="{{ asset('images/APAE.jpg') }}" alt="Logo do Sistema" width="300">
            <!-- Formulário de Login -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="text" id="Usuario" name="email" placeholder="Email" value="{{ old('email') }}">
                <div class="senhaContainer">
                    <input type="password" id="Senha" name="password" placeholder="Senha">
                    <button id="olhoIcon" class="olhoIcone"></button>  
                </div>
                <button type="submit" id="Login">Login</button>
                <!-- Exibição de erros de login -->
                @if ($errors->any())
                    <p id="mensagemErro" class="mensagem-erro">
                        @foreach ($errors->all() as $error)
                            <span>{{ $error }}</span><br>
                        @endforeach
                    </p>
                @endif
            </form>
        </div>
    @vite(['resources/js/login.js']) <!-- Se tiver JavaScript -->
</body>
</html>
