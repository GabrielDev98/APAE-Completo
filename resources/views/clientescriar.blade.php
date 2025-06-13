<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>APAE TATUÍ - Novo Cliente</title>
  <link rel="icon" href="images/APAE-icon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <style>
    :root {
      --azul-primario: #0056b3;
      --azul-escuro: #003366;
      --cinza-claro: #f5f7fa;
      --cinza-escuro: #6c757d;
      --verde: #28a745;
      --laranja: #fd7e14;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Arial, sans-serif;
    }

    body {
      background-color: var(--cinza-claro);
      color: #333;
    }

    .header {
      background-color: var(--azul-escuro);
      color: white;
      padding: 0.8rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .logo {
      display: flex;
      align-items: center;
    }

    .logo img {
      height: 45px;
      margin-right: 1rem;
    }

    .logo-text h1 {
      font-size: 1.4rem;
    }

    .logo-text p {
      font-size: 0.8rem;
      opacity: 0.8;
    }

    .user-area {
      display: flex;
      align-items: center;
      gap: 1.5rem;
    }

    .notificacao {
      position: relative;
      cursor: pointer;
      font-size: 1.2rem;
      color: white;
    }

    .notificacao-badge {
      position: absolute;
      top: -6px;
      right: -10px;
      background-color: var(--laranja);
      color: white;
      border-radius: 50%;
      width: 18px;
      height: 18px;
      font-size: 0.7rem;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .user-info {
      display: flex;
      align-items: center;
      gap: 0.7rem;
      color: white;
    }

    .user-avatar {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      background-color: #ddd;
      overflow: hidden;
      flex-shrink: 0;
    }

    .user-avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }


    .main-content {
      max-width: 900px;
      margin: 2rem auto;
      padding: 1.5rem;
    }

    .page-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
    }

    .page-title {
      font-size: 1.6rem;
      color: var(--azul-escuro);
    }

    .card {
      background-color: white;
      border-radius: 6px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      padding: 2rem;
    }

    .form-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
      margin-bottom: 1.5rem;
    }

    .form-group {
      display: flex;
      flex-direction: column;
    }

    .form-group label {
      font-size: 0.9rem;
      font-weight: 600;
      color: var(--cinza-escuro);
      margin-bottom: 0.4rem;
    }

    .form-control {
      padding: 0.7rem;
      font-size: 0.9rem;
      border-radius: 4px;
      border: 1px solid #ccc;
    }


    .logout-btn {
      background: transparent;
      border: none;
      padding: 4px;
      cursor: pointer;
    }

    .logout-btn img {
      filter: brightness(0) invert(1); /* deixa branco */
      width: 24px;
      height: 24px;
    }

    .form-control:focus {
      outline: none;
      border-color: var(--azul-primario);
    }

    .btn {
      padding: 0.6rem 1.2rem;
      font-size: 0.9rem;
      border-radius: 4px;
      cursor: pointer;
      border: none;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      transition: 0.2s ease;
    }

    .btn-primary {
      background-color: var(--azul-primario);
      color: white;
    }

    .btn-primary:hover {
      background-color: var(--azul-escuro);
    }

    .btn-outline {
      text-decoration: none;
      background-color: transparent;
      border: 1px solid var(--cinza-escuro);
      color: var(--cinza-escuro);
    }

    .btn-outline:hover {
      background-color: #f1f1f1;
    }

    .form-actions {
      margin-top: 2rem;
      display: flex;
      gap: 1rem;
      justify-content: flex-end;
    }
  </style>
</head>
  <script>
    function aplicarMascaraCPF(campo) {
      campo.value = campo.value
        .replace(/\D/g, '') // Remove tudo que não é dígito
        .replace(/(\d{3})(\d)/, '$1.$2') // Coloca ponto entre o 3º e 4º dígito
        .replace(/(\d{3})(\d)/, '$1.$2') // Coloca ponto entre o 6º e 7º dígito
        .replace(/(\d{3})(\d{1,2})$/, '$1-$2'); // Coloca hífen antes dos 2 últimos dígitos
    }

    function aplicarMascaraTelefone(campo) {
      campo.value = campo.value
        .replace(/\D/g, '') // Remove tudo que não é dígito
        .replace(/(\d{2})(\d)/, '($1) $2') // Coloca parênteses no DDD
        .replace(/(\d{5})(\d)/, '$1-$2') // Coloca hífen após os primeiros 5 dígitos do número
        .replace(/(-\d{4})\d+?$/, '$1'); // Limita a 4 dígitos após o hífen
    }

    document.addEventListener('DOMContentLoaded', () => {
      const campoCPF = document.getElementById('cpf');
      const campoTelefone = document.getElementById('telefone');

      if(campoCPF) {
        campoCPF.addEventListener('input', () => aplicarMascaraCPF(campoCPF));
      }

      if(campoTelefone) {
        campoTelefone.addEventListener('input', () => aplicarMascaraTelefone(campoTelefone));
      }
    });
  </script>
<body>
  <header class="header">
    <div class="logo">
      <img src="https://static.wixstatic.com/media/4367f0_027c7fe006a24e679c5aa639a0f7df8d~mv2.png/v1/fill/w_380,h_380,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/%C3%8Dcone%20APAE.png" alt="APAE">
      <div class="logo-text">
        <h1>APAE TATUÍ</h1>
        <p>Gestão Documental</p>
      </div>
    </div>

    <div class="user-area">
      <div class="notificacao">
        <i class="fas fa-bell"></i>
        <span class="notificacao-badge">3</span>
      </div>

      <div class="user-info">
        <div class="user-avatar">
          <img src="https://img.freepik.com/vetores-premium/icone-de-perfil-de-avatar-padrao-imagem-de-usuario-de-midia-social-icone-de-avatar-cinza-silhueta-de-perfil-em-branco-ilustracao-vetorial_561158-3383.jpg?semt=ais_hybrid&w=740" alt="Usuário" width="38" height="38">
        </div>
        <div>
          <div class="user-name">{{ Auth::user()->name }}</div>
        </div>
        <form method="POST" action="{{ route('logout') }}" class="logout-form">
          @csrf
        <button type="submit" class="logout-btn" title="Sair">
          <img src="/images/logout.png" alt="Sair" style="width: 24px; height: 24px;">
        </button>
        </form>
      </div>
    </div>
  </header>

  <main class="main-content">
    <div class="page-header">
      <h1 class="page-title">Novo Cliente</h1>
    </div>

    <div class="card">
        <form method="POST" action="{{ route('clientes.store') }}">
          @csrf

          <div class="form-grid">
            <div class="form-group">
              <label for="nome">Nome Completo</label>
              <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome completo" value="{{ old('nome') }}">
            </div>

            <div class="form-group">
              <label for="cpf">CPF ou CNPJ</label>
              <input type="text" id="cpf" name="cpf" class="form-control" placeholder="000.000.000-00" value="{{ old('cpf') }}">
            </div>

            <div class="form-group">
              <label for="cidade">Cidade</label>
              <input type="text" id="cidade" name="cidade" class="form-control" placeholder="Cidade" value="{{ old('cidade') }}">
            </div>

            <div class="form-group">
              <label for="telefone">Telefone</label>
              <input type="text" id="telefone" name="telefone" class="form-control" placeholder="(99) 99999-9999" value="{{ old('telefone') }}">
            </div>

            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="cliente@email.com" value="{{ old('email') }}">
            </div>

            <div class="form-group">
              <label for="status">Status</label>
              <select id="status" name="ativo" class="form-control">
                <option value="1">Ativo</option>
                <option value="0">Inativo</option>
              </select>
            </div>
          </div>

          <div class="form-actions">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Salvar</button>
            <a href="{{ route('clientes.index') }}" class="btn btn-outline"><i class="fas fa-times"></i> Cancelar</a>
          </div>
        </form>
    </div>
  </main>
</body>
</html>
