<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>APAE TATUÍ - Fale Conosco</title>
  <link rel="icon" href="images/APAE-icon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <style>
    :root {
      --azul-primario: #0056b3;
      --azul-escuro: #003366;
      --cinza-claro: #f5f7fa;
      --cinza-escuro: #6c757d;
      --verde-whatsapp: #25d366;
      --azul-facebook: #3b5998;
      --rosa-instagram: #c13584;
    }
    
    html, body {
      overflow: hidden;
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

    .container {
      display: flex;
      min-height: calc(100vh - 66px);
    }

    .sidebar {
      width: 220px;
      background-color: white;
      padding: 1.5rem 0;
      box-shadow: 2px 0 10px rgba(0,0,0,0.05);
    }

    .nav-menu {
      list-style: none;
    }

    .nav-title {
      color: var(--cinza-escuro);
      font-size: 0.85rem;
      text-transform: uppercase;
      font-weight: 600;
      padding: 0.8rem 1.5rem;
      margin-top: 1rem;
    }

    .nav-menu li a {
      display: flex;
      align-items: center;
      padding: 0.7rem 1.5rem;
      color: var(--cinza-escuro);
      text-decoration: none;
      font-size: 0.95rem;
      transition: all 0.2s;
    }

    .nav-menu li a:hover,
    .nav-menu li a.active {
      background-color: rgba(0,86,179,0.1);
      color: var(--azul-primario);
      border-left: 3px solid var(--azul-primario);
    }

    .nav-menu li a i {
      margin-right: 0.8rem;
      width: 20px;
      text-align: center;
      font-size: 1rem;
    }

    .main-content {
      flex: 1;
      padding: 2rem;
      overflow-y: auto;
    }

    .page-title {
      font-size: 1.8rem;
      color: var(--azul-escuro);
      margin-bottom: 2rem;
    }

    /* Cards para contatos */
    .contact-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
    }

    .card {
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      padding: 2rem;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .card i {
      font-size: 4rem;
      margin-bottom: 1rem;
      display: block;
    }

    .card.whatsapp {
      color: var(--verde-whatsapp);
    }

    .card.instagram {
      color: var(--rosa-instagram);
    }

    .card.facebook {
      color: var(--azul-facebook);
    }

    .card h3 {
      font-size: 1.4rem;
      margin-bottom: 0.5rem;
      color: var(--azul-escuro);
    }

    .card p {
      font-size: 1rem;
      color: var(--cinza-escuro);
      word-wrap: break-word;
      user-select: text;
    }

    /* Link estilizado dos cards */
    .card a {
      text-decoration: none;
      display: inline-block;
      margin-top: 1rem;
      font-weight: 600;
      font-size: 1rem;
      padding: 0.5rem 1.2rem;
      border-radius: 30px;
      transition: background-color 0.3s ease, color 0.3s ease;
      border: 2px solid;
    }

    /* WhatsApp */
    .card.whatsapp a {
      color: var(--verde-whatsapp);
      border-color: var(--verde-whatsapp);
      background-color: transparent;
    }
    .card.whatsapp a:hover {
      background-color: var(--verde-whatsapp);
      color: white;
    }

    /* Instagram */
    .card.instagram a {
      color: var(--rosa-instagram);
      border-color: var(--rosa-instagram);
      background-color: transparent;
    }
    .card.instagram a:hover {
      background-color: var(--rosa-instagram);
      color: white;
    }

    /* Facebook */
    .card.facebook a {
      color: var(--azul-facebook);
      border-color: var(--azul-facebook);
      background-color: transparent;
    }
    .card.facebook a:hover {
      background-color: var(--azul-facebook);
      color: white;
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
  </style>
</head>
<body>
  <header class="header">
      <a href="/Main" class="logo" style="text-decoration: none; color: inherit;">
        <img src="https://static.wixstatic.com/media/4367f0_027c7fe006a24e679c5aa639a0f7df8d~mv2.png/v1/fill/w_380,h_380,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/%C3%8Dcone%20APAE.png" alt="APAE">
        <div class="logo-text">
          <h1>APAE TATUÍ</h1>
          <p>Gestão Documental</p>
        </div>
      </a>
    </div>

    <div class="user-area">
      <div class="notificacao">
        <i class="fas fa-bell"></i>
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

  <div class="container">

    <nav class="sidebar">
      <ul class="nav-menu">
        <li class="nav-title">Inicio</li>
        <li><a href="/Main" ><i class="fas fa-home"></i> <span>APAE</span></a></li>
        <li><a href="/recursos"><i class="fas fa-folder-open"></i> <span>Recursos</span></a></li>
        <li><a href="/fale-conosco" class="active"><i class="fas fa-envelope"></i> <span>Fale Conosco</span></a></li>
        <li class="nav-title">Cadastros</li>
        <li><a href="/clientes"><i class="fas fa-users"></i> <span>Clientes</span></a></li>
        <li><a href="/notas"><i class="fas fa-file-invoice-dollar"></i> <span>Notas Fiscais</span></a></li>
      </ul>
      <ul class="nav-menu">
        <li class="nav-title">Admin</li>
        <li><a href="/registro"><i class="fas fa-users"></i> <span>Criar Usuário</span></a></li>
      </ul>
    </nav>

    <!-- Conteúdo Principal -->
    <main class="main-content">
      <h2 class="page-title">Fale Conosco</h2>
      
      <div class="contact-cards">
        <div class="card whatsapp">
          <i class="fab fa-whatsapp"></i>
          <h3>Whatsapp</h3>
          <p>(15) 99814-2117</p>
          <a href="https://wa.me/5515998142117" target="_blank" rel="noopener">Enviar mensagem</a>
        </div>

        <div class="card instagram">
          <i class="fab fa-instagram"></i>
          <h3>Instagram</h3>
          <p>@apaetatui</p>
          <a href="https://www.instagram.com/apaetatui/" target="_blank" rel="noopener">Visitar perfil</a>
        </div>

        <div class="card facebook">
          <i class="fab fa-facebook-f"></i>
          <h3>Facebook</h3>
          <p>@apaetatuisp</p>
          <a href="https://www.facebook.com/apaetatuisp" target="_blank" rel="noopener">Visitar página</a>
        </div>
      </div>
    </main>
  </div>
</body>
</html>
