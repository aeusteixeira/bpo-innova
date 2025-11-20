<!-- Header Component - BPO Innova -->
<?php
// Função para verificar se a página está ativa
function isActive($page) {
    $request_uri = $_SERVER['REQUEST_URI'];

    // Remove query string se existir
    $request_uri = explode('?', $request_uri)[0];

    // Remove barra inicial se existir
    $request_uri = ltrim($request_uri, '/');

    // Trata casos especiais
    if ($request_uri === '' || $request_uri === 'index.php') {
        $current_page = 'index';
    } else {
        // Remove extensão .php
        $current_page = str_replace('.php', '', $request_uri);
    }

    return $current_page === $page ? 'active' : '';
}
?>
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center gap-2" href="<?php echo $base_path; ?>index.php">
        <img src="<?php echo $base_path; ?>img/logo.png" alt="BPO Innova" height="48" class="d-inline-block" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPrimary"
        aria-controls="navbarPrimary" aria-expanded="false" aria-label="Alternar navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarPrimary">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link <?php echo isActive('index'); ?>" href="<?php echo $base_path; ?>index.php" data-translate="nav.inicio">Início</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php echo isActive('servicos') || isActive('servicos/paralegal') || isActive('servicos/servicos-especiais') || isActive('servicos/bpo') ? 'active' : ''; ?>" href="<?php echo $base_path; ?>servicos.php" id="servicosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-translate="nav.servicos">Serviços</a>
            <ul class="dropdown-menu" aria-labelledby="servicosDropdown">
              <li><a class="dropdown-item <?php echo isActive('servicos'); ?>" href="<?php echo $base_path; ?>servicos.php" data-translate="nav.servicos_visao_geral">Visão Geral</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item <?php echo isActive('servicos/paralegal'); ?>" href="<?php echo $base_path; ?>servicos/paralegal.php" data-translate="nav.paralegal">Paralegal</a></li>
              <li><a class="dropdown-item <?php echo isActive('servicos/servicos-especiais'); ?>" href="<?php echo $base_path; ?>servicos/servicos-especiais.php" data-translate="nav.servicos_especiais">Serviços Especiais</a></li>
              <li><a class="dropdown-item <?php echo isActive('servicos/bpo'); ?>" href="<?php echo $base_path; ?>servicos/bpo.php" data-translate="nav.contabilidade">Contabilidade</a></li>
              <li><a class="dropdown-item <?php echo isActive('servicos/bpo'); ?>" href="<?php echo $base_path; ?>servicos/bpo.php" data-translate="nav.fiscal">Fiscal</a></li>
              <li><a class="dropdown-item <?php echo isActive('servicos/bpo'); ?>" href="<?php echo $base_path; ?>servicos/bpo.php" data-translate="nav.folha_pagamento">Folha de Pagamento</a></li>
              <li><a class="dropdown-item <?php echo isActive('servicos/bpo'); ?>" href="<?php echo $base_path; ?>servicos/bpo.php" data-translate="nav.financeiro">Financeiro</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link <?php echo isActive('servicos/solucoes-por-seguimento'); ?>" href="<?php echo $base_path; ?>servicos/solucoes-por-seguimento.php" data-translate="nav.solucoes_por_segmento">Soluções por Segmento</a></li>
          <li class="nav-item"><a class="nav-link <?php echo isActive('servicos/tecnologia'); ?>" href="<?php echo $base_path; ?>servicos/tecnologia.php" data-translate="nav.tecnologia_inovacao">Tecnologia e Inovação</a></li>
          <li class="nav-item"><a class="nav-link <?php echo isActive('sobre'); ?>" href="<?php echo $base_path; ?>sobre.php" data-translate="nav.sobre_nos">Sobre Nós</a></li>
          <li class="nav-item"><a class="nav-link <?php echo isActive('contato'); ?>" href="<?php echo $base_path; ?>contato.php" data-translate="nav.contato">Contato</a></li>
        </ul>
        <div class="d-flex ms-lg-3">
          <a href="<?php echo $base_path; ?>contato.php" class="btn btn-warning" data-translate="nav.solicite_proposta">Solicite uma Proposta</a>
          <div class="dropdown">
            <button class="btn btn-link dropdown-toggle text-dark" type="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="fa-solid fa-globe"></i><span data-translate="nav.idioma"> Idioma</span>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); changeLanguage('pt'); return false;" data-lang="pt">🇧🇷 Português</a></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); changeLanguage('en'); return false;" data-lang="en">🇺🇸 Inglês</a></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); changeLanguage('es'); return false;" data-lang="es">🇪🇸 Espanhol</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
<!-- End Header Component -->