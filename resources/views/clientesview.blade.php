<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>APAE TATUÍ - Clientes</title>
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

    #toggle-filtro:checked + label + #form-filtros {
      display: block !important;
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
    box-shadow: 2px 0 10px rgba(0, 0, 0, 0.05);
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
    background-color: rgba(0, 86, 179, 0.1);
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
    padding: 1.8rem;
  }

  .page-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.8rem;
  }

  .page-title {
    color: var(--azul-escuro);
    font-size: 1.6rem;
  }

  .page-actions {
    display: flex;
    gap: 0.8rem;
  }

  .btn {
    padding: 0.6rem 1.2rem;
    border: none;
    border-radius: 4px;
    font-size: 0.9rem;
    cursor: pointer;
    transition: all 0.2s;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
  }

  .btn i {
    font-size: 0.9rem;
  }

  .btn-primary {
    background-color: var(--azul-primario);
    text-decoration: none;
    color: white;
  }

  .btn-primary:hover {
    background-color: var(--azul-escuro);
  }

  .btn-outline {
    background-color: transparent;
    border: 1px solid var(--cinza-escuro);
    color: var(--cinza-escuro);
  }

  .btn-outline:hover {
    background-color: #f0f0f0;
  }

  .card {
    background-color: white;
    border-radius: 6px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    padding: 1.5rem;
    margin-bottom: 1.8rem;
  }

  .card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.5rem;
    padding-bottom: 0.8rem;
    border-bottom: 1px solid #eee;
  }

  .card-title {
    font-size: 1.2rem;
    color: var(--azul-escuro);
  }

  .table-responsive {
    overflow-x: auto;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.9rem;
  }

  th,
  td {
    padding: 0.8rem;
    text-align: left;
    border-bottom: 1px solid #eee;
  }

  th {
    background-color: #f8f9fa;
    color: var(--azul-escuro);
    font-weight: 600;
  }

  tr:hover {
    background-color: #f8fafc;
  }

  .badge {
    background-color:rgb(247, 230, 230);
    display: inline-block;
    padding: 0.3rem 0.6rem;
    border-radius: 4px;
    font-size: 0.75rem;
    font-weight: 600;
  }

  .badge-success {
    background-color: #e6f7ee;
    color: var(--verde);
  }

  .badge-danger {
    background-color: #fde8e8;
    color: #dc3545;
  }

  .filtros {
    display: flex;
    gap: 1rem;
    margin-bottom: 1.5rem;
    flex-wrap: wrap;
  }

  .filtro-item {
    min-width: 200px;
  }

  .form-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 500;
    font-size: 0.9rem;
    color: var(--cinza-escuro);
  }

  .form-control {
    width: 100%;
    padding: 0.7rem;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 0.9rem;
  }

  .form-control:focus {
    outline: none;
    border-color: var(--azul-primario);
  }
  </style>
</head>
<body>
 <header class="header">
    <div class="logo">
        <a href="/Main" class="logo" style="text-decoration: none; color: inherit;">
          <img src="https://static.wixstatic.com/media/4367f0_027c7fe006a24e679c5aa639a0f7df8d~mv2.png/v1/fill/w_380,h_380,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/%C3%8Dcone%20APAE.png" alt="APAE">
          <div class="logo-text">
            <h1>APAE TATUÍ</h1>
            <p>Gestão Documental</p>
          </div>
        </a>
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
        <li><a href="/Main" ><i class="fas fa-home"></i> <span>APAE</span></a></li>
        <li><a href="/recursos"><i class="fas fa-folder-open"></i> <span>Recursos</span></a></li>
        <li><a href="/fale-conosco"><i class="fas fa-envelope"></i> <span>Fale Conosco</span></a></li>
        <li class="nav-title">Cadastros</li>
        <li><a href="/clientes" class="active"><i class="fas fa-users"></i> <span>Clientes</span></a></li>
        <li><a href="/notas"><i class="fas fa-file-invoice-dollar"></i> <span>Notas Fiscais</span></a></li>
      </ul>
      <ul class="nav-menu">
        <li class="nav-title">Admin</li>
        <li><a href="/registro"><i class="fas fa-users"></i> <span>Criar Usuário</span></a></li>
      </ul>
    </nav>

    <main class="main-content">
      <div class="page-header">
        <h1 class="page-title">Clientes</h1>
        <div class="page-actions">
          <!-- checkbox escondido -->
          <input type="checkbox" id="toggle-filtro" style="display:none;">
          <label for="toggle-filtro" class="btn btn-outline" style="cursor:pointer;">
            <i class="fas fa-filter"></i> Filtrar
          </label>
          <button class="btn btn-outline"><i class="fas fa-download"></i> Exportar</button>
          <a href="{{ route('clientes.criar') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Novo Cliente</a>
        </div>
      </div>

      {{-- Formulário de filtros (escondido por padrão) --}}
      <form method="GET" action="{{ route('clientes.index') }}" id="form-filtros" style="display:none; margin-top: 1rem;">
        <div class="card">
          <div class="filtros" style="display: flex; gap: 1rem;">
            <div class="filtro-item" style="flex: 1;">
              <div class="form-group">
                <label for="filtro-nome">Nome</label>
                <input type="text" name="nome" id="filtro-nome" class="form-control" placeholder="Nome do cliente" value="{{ request('nome') }}" />
              </div>
            </div>

            <div class="filtro-item" style="flex: 1;">
              <div class="form-group">
                <label for="filtro-cidade">Cidade</label>
                <input type="text" name="cidade" id="filtro-cidade" class="form-control" placeholder="Cidade" value="{{ request('cidade') }}" />
              </div>
            </div>

            <div class="filtro-item" style="flex: 1;">
              <div class="form-group">
                <label for="filtro-status">Status</label>
                <select name="status" id="filtro-status" class="form-control">
                  <option value="">Todos</option>
                  <option value="ativo" @selected(request('status') == 'ativo')>Ativo</option>
                  <option value="inativo" @selected(request('status') == 'inativo')>Inativo</option>
                </select>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary" style="margin-top: 0.5rem;"><i class="fas fa-search"></i> Aplicar Filtros</button>
        </div>
      </form>

      <div class="card">
        <div class="card-header">
          <h2 class="card-title">Lista de Clientes</h2>
          <div><span style="font-size: 0.9rem; color: var(--cinza-escuro);">Total: {{ $clientes->total() }} registros</span></div>
        </div>

        <div class="table-responsive">
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF/CNPJ</th>
                <th>Cidade</th>
                <th>Telefone</th>
                <th>Status</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($clientes as $cliente)
                <tr>
                  <td>{{ $cliente->id }}</td>
                  <td>{{ $cliente->nome }}</td>
                  <td>{{ $cliente->cpf }}</td>
                  <td>{{ $cliente->cidade }}</td>
                  <td>{{ $cliente->telefone }}</td>
                  <td>
                    <span class="badge {{ $cliente->ativo ? 'badge-success' : 'badge-secondary' }}">
                      {{ $cliente->ativo ? 'Ativo' : 'Inativo' }}
                    </span>
                  </td>

                  <td>
                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-outline" title="Editar">
                      <i class="fas fa-edit"></i>
                    </a>

                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Tem certeza que deseja excluir este cliente?');">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-outline" title="Excluir">
                        <i class="fas fa-trash"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="7" style="text-align: center;">Nenhum cliente encontrado.</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>

        {{-- Paginação --}}
        <div style="margin-top: 1rem;">
          {{ $clientes->appends(request()->query())->links() }}
        </div>
      </div>
    </main>
  </div>
<!-- ... todo seu código HTML anterior ... -->

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const formFiltros = document.getElementById('form-filtros');
    const labelFiltro = document.querySelector('label[for="toggle-filtro"]');

    if (labelFiltro) {
      labelFiltro.addEventListener('click', function () {
        formFiltros.style.display = formFiltros.style.display === 'none' ? 'block' : 'none';
      });
    }
  });
</script>
</body>
</html>
