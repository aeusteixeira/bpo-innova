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
        <li class="nav-item"><a class="nav-link <?php echo isActive('index'); ?>" href="<?php echo $base_path; ?>index.php">Início</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php echo isActive('servicos') || isActive('servicos/paralegal') || isActive('servicos/servicos-especiais') || isActive('servicos/bpo') ? 'active' : ''; ?>" href="<?php echo $base_path; ?>servicos.php" id="servicosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Serviços
            </a>
            <ul class="dropdown-menu" aria-labelledby="servicosDropdown">
              <li><a class="dropdown-item <?php echo isActive('servicos'); ?>" href="<?php echo $base_path; ?>servicos.php">Visão Geral</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item <?php echo isActive('servicos/paralegal'); ?>" href="<?php echo $base_path; ?>servicos/paralegal.php">Paralegal</a></li>
              <li><a class="dropdown-item <?php echo isActive('servicos/servicos-especiais'); ?>" href="<?php echo $base_path; ?>servicos/servicos-especiais.php">Serviços Especiais</a></li>
              <li><a class="dropdown-item <?php echo isActive('servicos/bpo'); ?>" href="<?php echo $base_path; ?>servicos/bpo.php">Contabilidade</a></li>
              <li><a class="dropdown-item <?php echo isActive('servicos/bpo'); ?>" href="<?php echo $base_path; ?>servicos/bpo.php">Fiscal</a></li>
              <li><a class="dropdown-item <?php echo isActive('servicos/bpo'); ?>" href="<?php echo $base_path; ?>servicos/bpo.php">Folha de Pagamento</a></li>
              <li><a class="dropdown-item <?php echo isActive('servicos/bpo'); ?>" href="<?php echo $base_path; ?>servicos/bpo.php">Financeiro</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link <?php echo isActive('servicos/solucoes-por-seguimento'); ?>" href="<?php echo $base_path; ?>servicos/solucoes-por-seguimento.php">Soluções por Segmento</a></li>
          <li class="nav-item"><a class="nav-link <?php echo isActive('servicos/tecnologia'); ?>" href="<?php echo $base_path; ?>servicos/tecnologia.php">Tecnologia e Inovação</a></li>
          <li class="nav-item"><a class="nav-link <?php echo isActive('sobre'); ?>" href="<?php echo $base_path; ?>sobre.php">Sobre Nós</a></li>
          <li class="nav-item"><a class="nav-link <?php echo isActive('contato'); ?>" href="<?php echo $base_path; ?>contato.php">Contato</a></li>
          <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
        </ul>
        <div class="d-flex ms-lg-3">
          <a href="<?php echo $base_path; ?>contato.php" class="btn btn-warning">Solicite uma Proposta</a>
          <div class="dropdown">
            <button class="btn btn-link dropdown-toggle text-dark" type="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="fa-solid fa-globe"></i> Idioma
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); changeLanguage('pt'); return false;" data-lang="pt">🇧🇷 Português</a></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); changeLanguage('en'); return false;" data-lang="en">🇺🇸 Inglês</a></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); changeLanguage('es'); return false;" data-lang="es">🇪🇸 Espanhol</a></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); changeLanguage('fr'); return false;" data-lang="fr">🇫🇷 Francês</a></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); changeLanguage('de'); return false;" data-lang="de">🇩🇪 Alemão</a></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); changeLanguage('it'); return false;" data-lang="it">🇮🇹 Italiano</a></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); changeLanguage('ja'); return false;" data-lang="ja">🇯🇵 Japonês</a></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); changeLanguage('ko'); return false;" data-lang="ko">🇰🇷 Coreano</a></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); changeLanguage('zh-CN'); return false;" data-lang="zh-CN">🇨🇳 Mandarim</a></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); changeLanguage('hi'); return false;" data-lang="hi">🇮🇳 Hindi</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- Google Translate Widget -->
  <div id="google_translate_element" style="display: none;"></div>

  <!-- Fallback: Tradução via Google Translate direto -->
  <div id="translate_fallback" style="display: none;">
    <div class="translate-banner">
      <span>🌐 Traduzir página para:</span>
      <a href="#" onclick="translatePage('en'); return false;" title="English">🇺🇸 EN</a>
      <a href="#" onclick="translatePage('es'); return false;" title="Español">🇪🇸 ES</a>
      <a href="#" onclick="translatePage('fr'); return false;" title="Français">🇫🇷 FR</a>
      <a href="#" onclick="translatePage('de'); return false;" title="Deutsch">🇩🇪 DE</a>
      <a href="#" onclick="translatePage('it'); return false;" title="Italiano">🇮🇹 IT</a>
      <a href="#" onclick="translatePage('ja'); return false;" title="日本語">🇯🇵 JP</a>
      <a href="#" onclick="translatePage('ko'); return false;" title="한국어">🇰🇷 KR</a>
      <a href="#" onclick="translatePage('zh-CN'); return false;" title="中文">🇨🇳 CN</a>
      <a href="#" onclick="translatePage('hi'); return false;" title="हिन्दी">🇮🇳 HI</a>
    </div>
  </div>

  <style>
    .translate-banner {
      position: fixed;
      top: 80px;
      right: 20px;
      background: #f8f9fa;
      border: 1px solid #dee2e6;
      border-radius: 8px;
      padding: 10px 15px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      z-index: 9999;
      font-size: 14px;
      max-width: 300px;
    }

    .translate-banner span {
      font-weight: bold;
      margin-right: 10px;
      color: #495057;
    }

    .translate-banner a {
      display: inline-block;
      margin: 0 3px;
      padding: 4px 8px;
      background: #007bff;
      color: white;
      text-decoration: none;
      border-radius: 4px;
      font-size: 12px;
      transition: background 0.2s;
    }

    .translate-banner a:hover {
      background: #0056b3;
      color: white;
      text-decoration: none;
    }
  </style>

  <script type="text/javascript">
    var googleTranslateLoaded = false;
    var translateRetries = 0;
    var maxRetries = 10;

    function googleTranslateElementInit() {
      try {
        console.log('🚀 Inicializando Google Translate Widget...');

        new google.translate.TranslateElement({
          pageLanguage: 'pt',
          includedLanguages: 'pt,en,es,fr,de,it,ja,ko,zh-CN,hi',
          layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
          autoDisplay: false
        }, 'google_translate_element');

        googleTranslateLoaded = true;
        console.log('✅ Google Translate Widget inicializado!');

        // Aguardar um pouco para o widget renderizar completamente
        setTimeout(function() {
          console.log('🔍 Verificando se o widget foi renderizado...');
          var skipTranslate = document.querySelector('.skiptranslate');
          if (skipTranslate) {
            console.log('🎯 .skiptranslate encontrado após inicialização');
            console.log('📄 Conteúdo atual:', skipTranslate.innerHTML.substring(0, 200) + '...');

            // Verificar se há algum select agora
            var selectsAfterInit = document.querySelectorAll('select');
            console.log('📊 Selects após inicialização:', selectsAfterInit.length);

            if (selectsAfterInit.length > 0) {
              console.log('🎉 Select encontrado após inicialização do widget!');
            } else {
              console.log('⚠️ Ainda não há selects após inicialização. Widget pode estar usando abordagem diferente.');
            }
          }
        }, 2000);

      } catch (error) {
        console.error('❌ Erro ao inicializar Google Translate:', error);
        retryGoogleTranslate();
      }
    }

    function changeLanguage(lang) {
      console.log('Iniciando mudança de idioma para:', lang);

      if (!googleTranslateLoaded) {
        console.log('Google Translate ainda não carregado, tentando novamente...');
        // Tentar carregar novamente se ainda não carregou
        if (translateRetries < maxRetries) {
          console.log('Tentando carregar Google Translate...');
          retryGoogleTranslate();
          setTimeout(function() {
            changeLanguage(lang);
          }, 2000);
        } else {
          alert('Erro: Google Translate não conseguiu carregar. Verifique sua conexão com a internet e tente novamente mais tarde.');
        }
        return;
      }

      // Função auxiliar para encontrar o select
      function findGoogleTranslateSelect() {
        console.log('🔍 Procurando elemento select do Google Translate...');

        // Primeiro, verificar se existe algum elemento select em qualquer lugar
        var allSelects = document.querySelectorAll('select');
        console.log('📊 Total de elementos select encontrados:', allSelects.length);

        // Listar todos os selects encontrados
        allSelects.forEach(function(select, index) {
          console.log('Select #' + (index + 1) + ':', select, 'Classes:', select.className, 'ID:', select.id);
        });

        // Verificar elementos relacionados ao Google Translate
        var googleElement = document.getElementById('google_translate_element');
        var skipTranslateElement = document.querySelector('.skiptranslate');

        console.log('🎯 Elemento google_translate_element:', googleElement);
        console.log('🎯 Elemento skiptranslate:', skipTranslateElement);

        if (skipTranslateElement) {
            console.log('🎯 Elemento skiptranslate encontrado!');
            console.log('🎯 Conteúdo HTML do skiptranslate:', skipTranslateElement.innerHTML.substring(0, 500) + '...');
            console.log('🎯 Estrutura DOM completa do skiptranslate:', skipTranslateElement);

            // Verificar se há elementos filhos
            console.log('🎯 Filhos diretos do skiptranslate:', skipTranslateElement.children.length);
            for (var k = 0; k < skipTranslateElement.children.length; k++) {
                console.log('Filho #' + (k + 1) + ':', skipTranslateElement.children[k], 'Tag:', skipTranslateElement.children[k].tagName);
            }

            var selectInSkipTranslate = skipTranslateElement.querySelector('select');
            console.log('🎯 Select dentro de skiptranslate:', selectInSkipTranslate);

            if (selectInSkipTranslate) {
                console.log('✅ Select encontrado dentro de .skiptranslate!');
                return selectInSkipTranslate;
            } else {
                console.log('❌ Select NÃO encontrado dentro de .skiptranslate');
                console.log('🔄 Tentando abordagem alternativa...');

                // Abordagem alternativa: tentar usar a API do Google Translate diretamente
                if (typeof google !== 'undefined' && google.translate) {
                    console.log('🌐 Google Translate API disponível, tentando uso direto...');

                    try {
                        // Tentar usar a função de tradução direta
                        if (google.translate.translateElement) {
                            google.translate.translateElement.setLang && google.translate.translateElement.setLang(lang);
                            console.log('✅ Idioma alterado via API direta do Google Translate!');
                            return true; // Retorna true para indicar sucesso
                        }
                    } catch (e) {
                        console.log('❌ Falha na API direta:', e.message);
                    }
                }

                // Última tentativa: procurar por qualquer elemento que possa controlar a tradução
                var googTeElements = document.querySelectorAll('[class*="goog-te"]');
                console.log('🔍 Elementos com classe goog-te encontrados:', googTeElements.length);

                googTeElements.forEach(function(el, idx) {
                    console.log('Elemento goog-te #' + (idx + 1) + ':', el, 'Classes:', el.className);
                    if (el.tagName === 'SELECT') {
                        console.log('🎯 Select encontrado via classe goog-te!');
                        return el;
                    }
                });
            }
        } else {
            console.log('❌ Elemento .skiptranslate não encontrado');
        }

        // Tentar diferentes seletores
        var selectors = [
          'select.goog-te-combo',
          '.goog-te-combo',
          'select[class*="goog-te-combo"]',
          '#google_translate_element select',
          '.skiptranslate select',
          'select[name*="lang"]',
          'select[onchange*="Translate"]',
          '.goog-te-menu-value select'
        ];

        for (var i = 0; i < selectors.length; i++) {
          var element = document.querySelector(selectors[i]);
          if (element) {
            console.log('✅ Elemento encontrado com seletor:', selectors[i], element);
            return element;
          }
        }

        // Buscar recursivamente em todos os elementos filhos do skiptranslate
        if (skipTranslateElement) {
          function findSelectRecursively(element) {
            if (element.tagName === 'SELECT') {
              console.log('✅ Select encontrado recursivamente:', element);
              return element;
            }

            for (var i = 0; i < element.children.length; i++) {
              var result = findSelectRecursively(element.children[i]);
              if (result) return result;
            }

            return null;
          }

          var recursiveResult = findSelectRecursively(skipTranslateElement);
          if (recursiveResult) {
            return recursiveResult;
          }
        }

        // Buscar em todos os iframes também
        var iframes = document.querySelectorAll('iframe');
        console.log('🔍 Verificando', iframes.length, 'iframes...');

        for (var j = 0; j < iframes.length; j++) {
          try {
            console.log('Verificando iframe #' + (j + 1));
            var iframeDoc = iframes[j].contentDocument || iframes[j].contentWindow.document;
            if (iframeDoc) {
              var selectInIframe = iframeDoc.querySelector('select');
              if (selectInIframe) {
                console.log('✅ Elemento encontrado em iframe');
                return selectInIframe;
              }
            }
          } catch (e) {
            console.log('❌ Erro ao acessar iframe #' + (j + 1) + ':', e.message);
          }
        }

        console.log('❌ Nenhum elemento select encontrado');
        return null;
      }

      var selectField = findGoogleTranslateSelect();

      if (selectField === true) {
        // API direta funcionou
        console.log('🎉 Tradução realizada via API direta!');
      } else if (selectField) {
        console.log('Select encontrado, alterando valor para:', lang);
        selectField.value = lang;
        selectField.dispatchEvent(new Event('change'));
        console.log('Idioma alterado com sucesso para:', lang);
      } else {
        console.warn('Elemento select do Google Translate não encontrado. Tentando novamente...');

        // Debug: mostrar todos os elementos relacionados ao Google Translate
        console.log('Debug - Elementos encontrados:');
        console.log('select.goog-te-combo:', document.querySelector('select.goog-te-combo'));
        console.log('.goog-te-combo:', document.querySelector('.goog-te-combo'));
        console.log('Todos os selects:', document.querySelectorAll('select'));
        console.log('Elemento google_translate_element:', document.getElementById('google_translate_element'));
        console.log('Classe skiptranslate:', document.querySelector('.skiptranslate'));

        // Sistema de retry múltiplo com delays progressivos
        var retryAttempts = 0;
        var maxRetryAttempts = 5;
        var retryDelays = [1000, 1500, 2000, 3000, 5000]; // Delays progressivos

        function attemptChangeLanguage() {
          retryAttempts++;
          console.log('🔄 Tentativa', retryAttempts, 'de', maxRetryAttempts, 'de encontrar o select...');

          var selectFieldRetry = findGoogleTranslateSelect();
          if (selectFieldRetry === true) {
            // API direta funcionou
            console.log('🎉 Tradução realizada via API direta na tentativa', retryAttempts);
          } else if (selectFieldRetry) {
            console.log('🎉 Select encontrado na tentativa', retryAttempts);
            selectFieldRetry.value = lang;
            selectFieldRetry.dispatchEvent(new Event('change'));
            console.log('🌐 Idioma alterado na tentativa', retryAttempts, 'para:', lang);
          } else if (retryAttempts < maxRetryAttempts) {
            // Aguardar o delay progressivo e tentar novamente
            var delay = retryDelays[retryAttempts - 1] || 2000;
            console.log('⏳ Aguardando', delay, 'ms antes da próxima tentativa...');
            setTimeout(attemptChangeLanguage, delay);
          } else {
            console.error('❌ Select não encontrado após', maxRetryAttempts, 'tentativas');
            console.log('❌ Usando método de fallback para tradução...');
            translatePage(lang); // Usar método de fallback
          }
        }

        // Iniciar tentativas
        attemptChangeLanguage();
      }
    }

    function retryGoogleTranslate() {
      translateRetries++;
      console.log('Tentativa de carregamento #' + translateRetries);

      if (translateRetries >= maxRetries) {
        console.error('Máximo de tentativas atingido. Google Translate não pôde ser carregado.');
        alert('Erro: Não foi possível carregar o serviço de tradução. Verifique sua conexão com a internet.');
        return;
      }

      // Remover script antigo se existir
      var oldScript = document.querySelector('script[src*="translate.google.com"]');
      if (oldScript) {
        oldScript.remove();
      }

      // Carregar novamente
      setTimeout(function() {
        var gt = document.createElement('script');
        gt.type = 'text/javascript';
        gt.async = true;
        gt.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(gt, s);
      }, 1000);
    }

    // Verificar se o Google Translate já está carregado a cada 500ms por 10 segundos
    var checkInterval = setInterval(function() {
      var selectElement = document.querySelector('select.goog-te-combo') ||
                         document.querySelector('.goog-te-combo') ||
                         document.querySelector('select[class*="goog-te-combo"]');

      if (selectElement && !googleTranslateLoaded) {
        googleTranslateLoaded = true;
        clearInterval(checkInterval);
        console.log('Google Translate detectado via polling! Elemento encontrado:', selectElement);
      }
    }, 500);

    // Limpar o interval após 10 segundos
    setTimeout(function() {
      clearInterval(checkInterval);
    }, 10000);

    // Função adicional para verificar periodicamente se o Google Translate está pronto
    window.checkGoogleTranslateReady = function() {
      var selectElement = document.querySelector('select.goog-te-combo') ||
                         document.querySelector('.goog-te-combo') ||
                         document.querySelector('select[class*="goog-te-combo"]');

      if (selectElement) {
        googleTranslateLoaded = true;
        console.log('Google Translate confirmado como pronto!');
        return true;
      }
      return false;
    };

    // Função de debug global para console
    window.debugGoogleTranslate = function() {
      console.log('🔧 === DEBUG GOOGLE TRANSLATE ===');
      console.log('🌐 googleTranslateLoaded:', googleTranslateLoaded);
      console.log('🔢 translateRetries:', translateRetries);

      var allSelects = document.querySelectorAll('select');
      console.log('📊 Total de selects na página:', allSelects.length);

      allSelects.forEach(function(select, index) {
        console.log('Select #' + (index + 1) + ':', {
          element: select,
          classes: select.className,
          id: select.id,
          name: select.name,
          value: select.value,
          options: select.options ? select.options.length : 'N/A'
        });
      });

      var skipTranslate = document.querySelector('.skiptranslate');
      console.log('🎯 .skiptranslate element:', skipTranslate);

      if (skipTranslate) {
        console.log('🎯 Conteúdo HTML de .skiptranslate:', skipTranslate.innerHTML);
        console.log('🎯 Estrutura DOM de .skiptranslate:', skipTranslate);
        console.log('🎯 Filhos do .skiptranslate:', skipTranslate.children.length);

        // Mostrar todos os filhos
        for (var i = 0; i < skipTranslate.children.length; i++) {
          var child = skipTranslate.children[i];
          console.log('  Filho #' + (i + 1) + ':', child, 'Tag:', child.tagName, 'Classes:', child.className);

          // Se for um select, mostrar mais detalhes
          if (child.tagName === 'SELECT') {
            console.log('    📋 SELECT encontrado! Value:', child.value, 'Options:', child.options.length);
          }
        }
      }

      var iframes = document.querySelectorAll('iframe');
      console.log('🔍 Iframes encontrados:', iframes.length);

      iframes.forEach(function(iframe, index) {
        console.log('Iframe #' + (index + 1) + ':', iframe.src, iframe);
      });

      console.log('🔧 === FIM DEBUG ===');
    };

    // Função para forçar busca do select (útil para debug)
    window.forceFindGoogleTranslateSelect = function() {
      console.log('🔍 Forçando busca do elemento select...');

      var selectors = [
        'select.goog-te-combo',
        '.goog-te-combo',
        'select[class*="goog-te-combo"]',
        '#google_translate_element select',
        '.skiptranslate select',
        'select[name*="lang"]',
        'select[onchange*="Translate"]',
        '.goog-te-menu-value select'
      ];

      for (var i = 0; i < selectors.length; i++) {
        var element = document.querySelector(selectors[i]);
        if (element) {
          console.log('✅ ENCONTRADO com seletor:', selectors[i], element);
          return element;
        }
      }

      console.log('❌ Nenhum select encontrado com seletores padrão');

      // Busca mais profunda
      var skipTranslate = document.querySelector('.skiptranslate');
      if (skipTranslate) {
        console.log('🔍 Buscando recursivamente no .skiptranslate...');
        function findSelectRecursively(element) {
          if (element.tagName === 'SELECT') {
            console.log('🎉 SELECT encontrado recursivamente:', element);
            return element;
          }
          for (var i = 0; i < element.children.length; i++) {
            var result = findSelectRecursively(element.children[i]);
            if (result) return result;
          }
          return null;
        }

        var result = findSelectRecursively(skipTranslate);
        if (result) {
          return result;
        }
      }

      console.log('❌ Nenhum select encontrado em lugar nenhum');
      return null;
    };

    // Função para testar tradução manualmente (útil para debug)
    window.testTranslation = function(lang) {
      console.log('🧪 Testando tradução manual para:', lang);

      var selectElement = forceFindGoogleTranslateSelect();

      if (selectElement) {
        console.log('🎯 Alterando valor do select para:', lang);
        selectElement.value = lang;
        selectElement.dispatchEvent(new Event('change'));
        console.log('✅ Evento de mudança disparado!');
        return true;
      } else {
        console.log('❌ Select não encontrado. Tentando métodos alternativos...');

        // Método alternativo 1: Manipular cookies do Google Translate
        try {
          console.log('🍪 Tentando manipular cookies do Google Translate...');
          document.cookie = "googtrans=/pt/" + lang + "; path=/; domain=" + window.location.hostname;
          console.log('✅ Cookie definido para tradução:', lang);

          // Recarregar a página para aplicar a tradução
          console.log('🔄 Recarregando página para aplicar tradução...');
          setTimeout(function() {
            window.location.reload();
          }, 500);

          return true;
        } catch (e) {
          console.log('❌ Falha ao manipular cookies:', e.message);
        }

        // Método alternativo 2: Usar URL do Google Translate
        try {
          console.log('🔗 Tentando usar URL de tradução direta...');
          var currentUrl = window.location.href;
          var translateUrl = 'https://translate.google.com/translate?sl=pt&tl=' + lang + '&u=' + encodeURIComponent(currentUrl);
          window.open(translateUrl, '_blank');
          console.log('✅ Página de tradução aberta em nova aba');
          return true;
        } catch (e) {
          console.log('❌ Falha ao abrir página de tradução:', e.message);
        }

        console.log('❌ Todos os métodos alternativos falharam');
        return false;
      }
    };

    // Função para monitorar em tempo real
    window.monitorGoogleTranslate = function(seconds) {
      seconds = seconds || 10;
      console.log('👀 Monitorando Google Translate por', seconds, 'segundos...');

      var startTime = Date.now();
      var interval = setInterval(function() {
        var elapsed = Math.round((Date.now() - startTime) / 1000);
        var select = forceFindGoogleTranslateSelect();

        if (select) {
          console.log('🎉 Select encontrado após', elapsed, 'segundos!');
          clearInterval(interval);
        } else if (elapsed >= seconds) {
          console.log('⏰ Tempo limite atingido. Select não encontrado.');
          clearInterval(interval);
        }
      }, 500);
    };

    // Sistema avançado de detecção do Google Translate Widget
    var widgetDetectionInterval = setInterval(function() {
      var skipTranslate = document.querySelector('.skiptranslate');
      if (skipTranslate && skipTranslate.children.length > 0) {
        // Verificar se algum dos filhos é um select ou contém um select
        for (var i = 0; i < skipTranslate.children.length; i++) {
          var child = skipTranslate.children[i];
          if (child.tagName === 'SELECT' ||
              child.querySelector('select') ||
              child.className.indexOf('goog-te') !== -1) {
            googleTranslateLoaded = true;
            console.log('🎯 Google Translate Widget detectado! Select pronto para uso.');
            clearInterval(widgetDetectionInterval);
            break;
          }
        }
      }
    }, 200);

    // Timeout para o sistema de detecção
    setTimeout(function() {
      clearInterval(widgetDetectionInterval);
    }, 15000);

    // Adicionar listener para mudanças no DOM (caso o Google Translate seja carregado dinamicamente)
    var observer = new MutationObserver(function(mutations) {
      mutations.forEach(function(mutation) {
        if (mutation.type === 'childList') {
          var addedNodes = mutation.addedNodes;
          for (var i = 0; i < addedNodes.length; i++) {
            var node = addedNodes[i];
            if (node.nodeType === Node.ELEMENT_NODE) {
              // Verificar se o nó adicionado é um select do Google Translate
              if (node.tagName === 'SELECT' && (
                  node.className.indexOf('goog-te') !== -1 ||
                  node.className.indexOf('goog-te-combo') !== -1
              )) {
                googleTranslateLoaded = true;
                console.log('🎯 Select do Google Translate detectado via MutationObserver!');
                observer.disconnect();
                return;
              }

              // Verificar se contém elementos do Google Translate
              if (node.matches && (
                  node.matches('.skiptranslate') ||
                  node.querySelector('.goog-te-combo') ||
                  node.querySelector('select.goog-te-combo')
              )) {
                googleTranslateLoaded = true;
                console.log('🎯 Container do Google Translate detectado via MutationObserver!');
                observer.disconnect();
                return;
              }
            }
          }
        }
      });
    });

    // Observar mudanças no body
    observer.observe(document.body, {
      childList: true,
      subtree: true
    });

    // Função de fallback para tradução via Google Translate
    function translatePage(lang) {
      console.log('🌐 Usando tradução via Google Translate URL para:', lang);

      try {
        var currentUrl = window.location.href;
        var translateUrl = 'https://translate.google.com/translate?sl=pt&tl=' + lang + '&u=' + encodeURIComponent(currentUrl);

        // Abrir em nova aba/janela
        var translateWindow = window.open(translateUrl, '_blank', 'width=1200,height=800,scrollbars=yes,resizable=yes');

        if (translateWindow) {
          console.log('✅ Página de tradução aberta em nova aba para idioma:', lang);
        } else {
          console.log('❌ Popup bloqueado. Tentando abrir na mesma aba...');
          // Fallback: abrir na mesma aba
          window.location.href = translateUrl;
        }

      } catch (e) {
        console.error('❌ Erro ao abrir página de tradução:', e.message);
        alert('Erro ao abrir tradução. Verifique se popups estão bloqueados.');
      }
    }

    // Função para mostrar banner de fallback se necessário
    window.showTranslateFallback = function() {
      var fallback = document.getElementById('translate_fallback');
      if (fallback) {
        fallback.style.display = 'block';
        console.log('📢 Banner de tradução alternativo exibido');
      }
    };

    // Carregar Google Translate API
    (function(){
      var gt = document.createElement('script');
      gt.type = 'text/javascript';
      gt.async = true;
      gt.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
      gt.onerror = function() {
        console.error('Erro ao carregar script do Google Translate');
        console.log('🔄 Ativando modo de fallback...');
        showTranslateFallback();
        retryGoogleTranslate();
      };
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(gt, s);
    })();
  </script>
<!-- End Header Component -->