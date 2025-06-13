<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>APAE TATUÍ - Nova Nota Fiscal</title>
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

  /* ===== AQUI ESTÃO AS REGRAS QUE VOCÊ PRECISA ACRESCENTAR ===== */
  .user-area {
    display: flex !important;
    flex-direction: row !important;
    align-items: center !important;
    gap: 1.5rem;
  }

  .user-area .notificacao,
  .user-info {
    display: flex !important;
    align-items: center !important;
    gap: 1rem !important; /* aumenta espaço entre avatar, nome e botão de logout */
  }

  .user-info form {
    margin-left: 1rem; /* caso prefira só mover o botão de logout para longe do nome */
  }
  /* ============================================================= */

  .logout-btn {
    background: transparent;
    border: none;
    padding: 4px;
    cursor: pointer;
    gap: 1.5rem;
  }

  .logout-btn img {
    filter: brightness(0) invert(1); /* deixa branco */
    width: 24px;
    height: 24px;
  }

  .main-content {
    max-width: 1000px;
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

    .user-avatar {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      background-color: #ddd;
      overflow: hidden;
      flex-shrink: 0;
      gap: 1.5rem;
    }

    .user-avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
</style>

</head>
<body>
<header class="header">
  <div class="logo">
    <img src="https://static.wixstatic.com/media/4367f0_027c7fe006a24e679c5aa639a0f7df8d~mv2.png" alt="APAE">
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
        <img src="https://img.freepik.com/vetores-premium/icone-de-perfil-de-avatar-padrao-imagem-de-usuario-de-midia-social-icone-de-avatar-cinza-silhueta-de-perfil-em-branco-ilustracao-vetorial_561158-3383.jpg" alt="Usuário" width="38" height="38">
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
    <h1 class="page-title">Nova Nota Fiscal</h1>
  </div>

  <div class="card">
    <form method="POST" action="{{ route('notas.store') }}">
      @csrf

      {{-- Exibe erros de validação --}}
      @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <div class="form-grid">
        <div class="form-group">
          <label for="numero">Número da NF</label>
          <input type="text" id="numero" name="numero" class="form-control" placeholder="Ex: NF-2025-0001" value="{{ old('numero') }}">
        </div>

        <div class="form-group">
          <label for="data">Data</label>
          <input type="date" id="data" name="data" class="form-control" value="{{ old('data') }}">
        </div>

        <div class="form-group">
          <label for="tipo">Tipo</label>
          <select id="tipo" name="tipo" class="form-control">
            <option value="entrada" {{ old('tipo') == 'entrada' ? 'selected' : '' }}>Entrada</option>
            <option value="saida" {{ old('tipo') == 'saida' ? 'selected' : '' }}>Saída</option>
          </select>
        </div>

        <div class="form-group">
          <label for="cliente">Cliente / Fornecedor</label>
          <input type="text" id="cliente" name="cliente" class="form-control" placeholder="Digite o nome" value="{{ old('cliente') }}">
        </div>

        <div class="form-group">
          <label for="valor">Valor Total</label>
          <input type="text" id="valor" name="valor" class="form-control" placeholder="R$ 0,00" value="{{ old('valor') }}">
        </div>

        <div class="form-group">
          <label for="status">Status</label>
          <select id="status" name="status" class="form-control">
            <option value="processada" {{ old('status') == 'processada' ? 'selected' : '' }}>Processada</option>
            <option value="pendente" {{ old('status') == 'pendente' ? 'selected' : '' }}>Pendente</option>
            <option value="cancelada" {{ old('status') == 'cancelada' ? 'selected' : '' }}>Cancelada</option>
          </select>
        </div>
      </div>

      <div class="form-actions">
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Salvar</button>
        <a href="{{ route('notas.index') }}" class="btn btn-outline"><i class="fas fa-times"></i> Cancelar</a>
      </div>
    </form>
  </div>
</main>
<script src="https://unpkg.com/imask"></script>
<script>
  IMask(document.getElementById('numero'), {
    mask: 'NF-0000-000'
  });

  // Máscara para valor com prefixo R$
  const valorInput = document.getElementById('valor');
  const maskValor = IMask(valorInput, {
    mask: 'R$ num',
    blocks: {
      num: {
        mask: Number,
        scale: 2,
        signed: false,
        thousandsSeparator: '.',
        padFractionalZeros: true,
        normalizeZeros: true,
        radix: ',',
        mapToRadix: ['.'],
      }
    }
  });

  // Se já houver um valor pré-carregado, forçamos a máscara
  if (valorInput.value) {
    const valorNumerico = parseFloat(valorInput.value.replace(/[^\d,]/g, '').replace(',', '.'));
    if (!isNaN(valorNumerico)) {
      maskValor.unmaskedValue = valorNumerico.toString();
    } else {
      maskValor.value = '';
    }
  }
</script>
</body>
</html>
