<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>APAE TATUÍ - Início</title>
  <link rel="icon" href="images/APAE-icon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
<style>
  :root {
    --azul-primario: #0056b3;
    --azul-escuro: #003366;
    --cinza-claro: #f5f7fa;
    --cinza-escuro: #6c757d;
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
  }

  .page-title {
    font-size: 1.8rem;
    color: var(--azul-escuro);
    margin-bottom: 2rem;
  }

  .banners {
    margin-top: 1rem;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1.5rem;
  }

  .banner {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    padding: 1rem;
    text-align: center;
    transition: box-shadow 0.3s ease, transform 0.3s ease;
    cursor: pointer;
  }

  .banner:hover {
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    transform: scale(1.05);
  }

  .banner img {
    max-width: 100%;
    height: 400px;
    object-fit: cover;
    border-radius: 8px;
  }

  .banner h3 {
    font-size: 1.1rem;
    color: var(--azul-escuro);
    margin-top: 0.8rem;
  }

  .banner p {
    font-size: 0.9rem;
    color: var(--cinza-escuro);
    margin-top: 0.4rem;
  }

  .quem-somos {
    margin-top: 3rem;
    margin-bottom: 1rem; /* espaçamento extra abaixo da seção */
    background-color: white;
    margin-top: 3rem;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
  }


  .quem-somos h2 {
    color: var(--azul-escuro);
    margin-bottom: 1rem;
  }

  .quem-somos p {
    text-indent: 1.5em;
    font-size: 1rem;
    color: var(--cinza-escuro);
    line-height: 1.5;
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
        <li><a href="#" class="active"><i class="fas fa-home"></i> <span>APAE</span></a></li>
        <li><a href="/recursos"><i class="fas fa-folder-open"></i> <span>Recursos</span></a></li>
        <li><a href="/fale-conosco"><i class="fas fa-envelope"></i> <span>Fale Conosco</span></a></li>
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
    <h2 class="page-title">Bem-vindo ao Sistema da APAE Tatuí</h2>

    <!-- Seção Quem somos primeiro -->
    <section class="quem-somos">
      <h2>Quem nós somos?</h2>
      <p>
        A APAE Tatuí é uma instituição sem fins lucrativos que atua na promoção da inclusão social e melhoria da qualidade de vida de pessoas com deficiência intelectual e múltipla. Fundada com o objetivo de oferecer apoio, atendimento especializado e atividades de desenvolvimento, a APAE Tatuí é referência na região por seu compromisso com a dignidade, o respeito e a autonomia de seus assistidos.
      </p>
    </section>

    <!-- Cards abaixo -->
    <div class="banners">
      <div class="banner">
        <a href="http://www.apaetatui.org.br/" target="_blank">
          <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgZHEHGo9Cr9Mh9-Bhx-wUzh7RHYURDFgfkhqo9sq6xdmNoGV7pulRpHnml5BffxfP74DhlP1yZvIutDIak6hAWiKmM2JcvPFOp3M51aBqQLYtgJsRo5698g2MDV3S997vLQAYAD0Zh_W2Y/s320/pizza+solid%25C3%25A1ria+entrega1ago20.jpg" alt="Evento 1"/>
        </a>
        <h3>Campanha Solidária</h3>
        <p>Participe da arrecadação de alimentos para famílias carentes.</p>
      </div>

      <div class="banner">
        <a href="http://www.apaetatui.org.br/" target="_blank">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBX0PhY0iSjvey0karRbk3-bvJxu3nFdLK_g&s" alt="Evento 2"/>
        </a>
        <h3>Semana da Inclusão</h3>
        <p>Eventos e oficinas especiais para conscientização e inclusão.</p>
      </div>

      <div class="banner">
        <a href="http://www.apaetatui.org.br/" target="_blank">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSacSKN7oP1Ev8BLDWaOGoYBQ2g8-9V2QHJcQ&s" alt="Evento 3"/>
        </a>
        <h3>Prestação de Contas</h3>
        <p>Acesse os relatórios de transparência e gestão anual.</p>
      </div>
    </div>
  </main>
  </div>
</body>
</html>
