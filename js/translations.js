// Sistema de Tradução - BPO Innova
let currentLanguage = 'pt';
let translations = {};

// Função para detectar o caminho base
function getBasePath() {
  const path = window.location.pathname;
  // Se estiver em uma subpasta (servicos/), usar ../
  if (path.includes('/servicos/')) {
    return '../';
  }
  // Se estiver na raiz, usar caminho vazio
  return '';
}

// Função para carregar traduções
async function loadTranslations(lang) {
  try {
    // Detectar o caminho base
    const basePath = getBasePath();
    const response = await fetch(`${basePath}translations/${lang}.json`);
    
    if (!response.ok) {
      throw new Error(`Erro ao carregar traduções: ${response.statusText}`);
    }
    
    translations = await response.json();
    currentLanguage = lang;
    
    // Salvar preferência no localStorage
    localStorage.setItem('preferredLanguage', lang);
    
    // Aplicar traduções
    applyTranslations();
    
    // Atualizar atributo lang do HTML
    document.documentElement.lang = lang === 'pt' ? 'pt-br' : lang;
    
    return true;
  } catch (error) {
    console.error('Erro ao carregar traduções:', error);
    // Se falhar, tentar carregar português como fallback
    if (lang !== 'pt') {
      try {
        return await loadTranslations('pt');
      } catch (fallbackError) {
        console.error('Erro ao carregar fallback (português):', fallbackError);
        return false;
      }
    }
    return false;
  }
}

// Função para aplicar traduções aos elementos com data-translate
function applyTranslations() {
  // Traduzir elementos com atributo data-translate
  document.querySelectorAll('[data-translate]').forEach(element => {
    const key = element.getAttribute('data-translate');
    const translation = getTranslation(key);
    
    if (translation) {
      // Verificar se é um elemento que precisa preservar HTML
      if (element.hasAttribute('data-translate-html')) {
        element.innerHTML = translation;
      } else {
        element.textContent = translation;
      }
    }
  });
  
  // Traduzir atributos específicos
  document.querySelectorAll('[data-translate-attr]').forEach(element => {
    const attrData = element.getAttribute('data-translate-attr');
    const [attr, key] = attrData.split(':');
    const translation = getTranslation(key);
    
    if (translation && attr) {
      element.setAttribute(attr, translation);
    }
  });
  
  // Traduzir placeholders
  document.querySelectorAll('[data-translate-placeholder]').forEach(element => {
    const key = element.getAttribute('data-translate-placeholder');
    const translation = getTranslation(key);
    
    if (translation) {
      element.placeholder = translation;
    }
  });
  
  // Traduzir opções de select
  document.querySelectorAll('option[data-translate]').forEach(option => {
    const key = option.getAttribute('data-translate');
    const translation = getTranslation(key);
    
    if (translation) {
      option.textContent = translation;
    }
  });
  
  // Traduzir títulos
  document.querySelectorAll('[data-translate-title]').forEach(element => {
    const key = element.getAttribute('data-translate-title');
    const translation = getTranslation(key);
    
    if (translation) {
      element.title = translation;
    }
  });
}

// Função para obter tradução por chave (suporta notação de ponto)
function getTranslation(key) {
  if (!key) return null;
  
  const keys = key.split('.');
  let value = translations;
  
  for (const k of keys) {
    if (value && typeof value === 'object' && k in value) {
      value = value[k];
    } else {
      console.warn(`Tradução não encontrada para a chave: ${key}`);
      return null;
    }
  }
  
  return typeof value === 'string' ? value : null;
}

// Função para mudar o idioma
async function changeLanguage(lang) {
  if (lang === currentLanguage) return;
  
  // Mostrar indicador de carregamento (opcional)
  const loadingIndicator = document.createElement('div');
  loadingIndicator.id = 'translation-loading';
  loadingIndicator.style.cssText = 'position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 9999; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;';
  loadingIndicator.textContent = 'Carregando tradução...';
  document.body.appendChild(loadingIndicator);
  
  try {
    const success = await loadTranslations(lang);
    
    // Verificar se temos traduções carregadas (sucesso ou fallback)
    const hasTranslations = Object.keys(translations).length > 0;
    
    if (hasTranslations) {
      // Atualizar o texto do botão de idioma
      const langButton = document.querySelector('[data-bs-toggle="dropdown"]');
      if (langButton) {
        const langText = langButton.querySelector('i').nextSibling;
        if (langText) {
          langText.textContent = ' ' + getTranslation('nav.idioma');
        }
      }
      
      // Scroll suave para o topo (opcional)
      window.scrollTo({ top: 0, behavior: 'smooth' });
    } else {
      // Só mostrar erro se realmente não conseguiu carregar nenhuma tradução
      console.error('Falha ao carregar tradução');
      alert('Erro ao carregar tradução. Por favor, tente novamente.');
    }
  } catch (error) {
    console.error('Erro ao mudar idioma:', error);
    // Só mostrar alerta se realmente não houver tradução carregada
    const hasTranslations = Object.keys(translations).length > 0;
    if (!hasTranslations) {
      alert('Erro ao carregar tradução. Por favor, tente novamente.');
    }
  } finally {
    // Remover indicador de carregamento
    const loading = document.getElementById('translation-loading');
    if (loading) {
      loading.remove();
    }
  }
}

// Carregar idioma salvo ou detectar do navegador
function initTranslations() {
  // Verificar se há idioma salvo no localStorage
  const savedLang = localStorage.getItem('preferredLanguage');
  
  if (savedLang) {
    loadTranslations(savedLang).catch(error => {
      console.error('Erro ao carregar idioma salvo:', error);
      // Tentar português como fallback
      loadTranslations('pt').catch(() => {
        console.error('Erro ao carregar fallback');
      });
    });
  } else {
    // Detectar idioma do navegador
    const browserLang = navigator.language || navigator.userLanguage;
    const langCode = browserLang.split('-')[0];
    
    // Lista de idiomas suportados
    const supportedLangs = ['pt', 'en', 'es', 'fr', 'de', 'it', 'ja', 'ko', 'zh-CN', 'hi'];
    
    let langToLoad = 'pt'; // padrão
    
    if (supportedLangs.includes(langCode)) {
      langToLoad = langCode;
    } else if (browserLang === 'zh-CN' || browserLang === 'zh-TW') {
      langToLoad = 'zh-CN';
    }
    
    loadTranslations(langToLoad).catch(error => {
      console.error('Erro ao carregar idioma detectado:', error);
      // Tentar português como fallback
      loadTranslations('pt').catch(() => {
        console.error('Erro ao carregar fallback');
      });
    });
  }
}

// Inicializar quando o DOM estiver pronto
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initTranslations);
} else {
  initTranslations();
}

// Exportar funções para uso global
window.changeLanguage = changeLanguage;
window.getTranslation = getTranslation;
window.loadTranslations = loadTranslations;

