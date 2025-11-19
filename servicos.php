<?php
$page_title = 'Serviços - BPO Innova';
$custom_css = '
.hero-bg {
  background: url("img/servicos/servicos.jpg") center/cover no-repeat !important;
}
';
$page_content = '
  <!-- Hero Section -->
  <section id="hero" class="hero">
    <div class="hero-bg" role="img" aria-label="Capa com visual moderno e abstrato"></div>
    <div class="hero-overlay"></div>
    <div class="container-fluid">
      <div class="hero-content">
        <h1 class="hero-title mb-3">Serviços Desenhados para Performance e Governança</h1>
        <p class="hero-sub">Mais do que terceirização. Uma parceria estratégica que transforma seu backoffice em um motor de crescimento, com a flexibilidade que seu negócio exige
        </p>
      </div>
      <!-- div class="hero-cta">
        <a href="#contato" class="btn btn-cta-primary">Solicite uma Proposta</a>
        <a href="#servicos" class="btn btn-cta-outline">Conheça os Serviços</a>
      </div -->
    </div>
  </section>

  <!-- Seção: Entendemos que cada empresa é única -->
  <section class="py-5 bg-light">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <p class="text-muted fs-5 mb-4">
            Entendemos que cada empresa é única. Por isso, nossos serviços são modulares e totalmente integráveis. Você escolhe quais processos terceirizar e quais manter internamente, operando em nosso robusto ERP ou no seu próprio sistema. O resultado é um modelo operacional sob medida, projetado para máxima eficiência e escalabilidade.
          </p>
          <h2 class="display-6 fw-bold text-warning mb-0">
            Explore como as nossas Soluções vão levar a sua Empresa a outro Patamar de Excelência
          </h2>
        </div>
      </div>
    </div>
  </section>

  <!-- Produtos e Soluções - Mosaico com imagens -->
  <section id="servicos" class="solutions">
    <div class="container-fluid">
      <div class="section-head">
        <div class="section-accent mb-2"></div>
        <h2 class="section-title">Nossos Serviços, seus resultados</h2>
        <p class="section-sub">Estratégia, processos e automação para acelerar resultados.</p>
      </div>

      <!-- Grid de Serviços -->
      <div class="services-grid">
        <div class="row g-4">
          <!-- Row 1: 3 cards -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="service-card">
              <div class="service-card-img">
                <img src="img/home/contabil.webp" alt="Contábil - Relatórios financeiros e gráficos" />
              </div>
              <div class="service-card-content">
                <h3 class="service-card-title">Contábil</h3>
                <p class="service-card-desc">Atuamos na área contábil a fim de atender todas normas e obrigações
                  contábeis, apresentando relatórios que auxiliam a gerência na tomada de decisões.</p>
                <a href="servicos/bpo.php" class="btn btn-service-outline">Saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="service-card">
              <div class="service-card-img">
                <img src="img/home/fiscal.webp" alt="Fiscal - Gestão tributária e benefícios" />
              </div>
              <div class="service-card-content">
                <h3 class="service-card-title">Fiscal</h3>
                <p class="service-card-desc">Garantimos que sua empresa tenha o melhor desempenho tributário,
                  monitorando alternativas justas que permitam o aproveitamento dos benefícios que a lei possa garantir.
                </p>
                <a href="servicos/bpo.php" class="btn btn-service-outline">Saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="service-card">
              <div class="service-card-img">
                <img src="img/home/financeiro.webp" alt="Financeiro - Gestão de recursos e investimentos" />
              </div>
              <div class="service-card-content">
                <h3 class="service-card-title">Financeiro</h3>
                <p class="service-card-desc">Aprimoramos a gestão financeira de nossos clientes e apresentando de forma
                  clara, as informações necessárias para a otimização da gestão de recursos e investimentos.</p>
                <a href="servicos/bpo.php" class="btn btn-service-outline">Saiba mais</a>
              </div>
            </div>
          </div>

          <!-- Row 2: 3 cards -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="service-card">
              <div class="service-card-img">
                <img src="img/home/folha.webp" alt="Folha - Processamento de pagamentos" />
              </div>
              <div class="service-card-content">
                <h3 class="service-card-title">Folha</h3>
                <p class="service-card-desc">Processamento de folha de pagamento, e atendimento consultivo diferenciado,
                  em conformidade com o e-Social e demais obrigações.</p>
                <a href="servicos/bpo.php" class="btn btn-service-outline">Saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="service-card">
              <div class="service-card-img">
                <img src="img/home/tecnologia.webp" alt="Tecnologia - ERP e inteligência artificial" />
              </div>
              <div class="service-card-content">
                <h3 class="service-card-title">Tecnologia</h3>
                <p class="service-card-desc">Usamos ERP de ponta ou ERP do cliente, ferramentas complementares e
                  inteligência artificial para que nossos clientes tenham informações com confiabilidade e acuracidade.
                </p>
                <a href="servicos/tecnologia.php" class="btn btn-service-outline">Saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="service-card">
              <div class="service-card-img">
                <img src="img/home/paralegal.webp" alt="Paralegal - Processos burocráticos" />
              </div>
              <div class="card-body text-center p-4">
                <h3 class="service-card-title">Paralegal</h3>
                <p class="service-card-desc">Nossos serviços de paralegal resolvem os processos burocráticos com
                  maestria, rapidez e precisão, para que sua empresa esteja sempre de acordo com o requerido.</p>
                <a href="servicos/paralegal.php" class="btn btn-service-outline">Saiba mais</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Card especial abaixo do grid -->
        <div class="row mt-5">
          <div class="col-12 col-lg-8 mx-auto">
            <div class="service-card service-card-special">
              <div class="service-card-img">
                <img src="img/home/servicos-especiais.webp" alt="Serviços Especiais - Soluções personalizadas" />
              </div>
              <div class="service-card-content">
                <h3 class="service-card-title text-dark">Serviços Especiais</h3>
                <p class="service-card-desc text-dark">Nossos serviços especiais são para necessidades específicas que
                  requerem especialistas de alto nível para solucionar as necessidades.</p>
                <a href="servicos/servicos-especiais.php" class="btn btn-service-primary">Saiba mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta-band" style="background-color: #004E29;">
    <div class="container-fluid">
      <div class="row align-items-center g-4">
        <div class="col-lg-8">
          <div class="cta-accent mb-3"></div>
          <h2 class="cta-title mb-3">Pronto para transformar a eficiência do seu negócio?</h2>
          <p class="cta-desc mb-0">Combine processos otimizados e tecnologia de ponta para crescer com confiança. Nossa
            equipe prepara uma proposta sob medida para a sua realidade.</p>
        </div>
        <div class="col-lg-4 d-flex gap-3 justify-content-lg-end justify-content-start">
          <a href="contato.php" class="btn btn-cta-primary">Entre em Contato</a>
          <a href="#servicos" class="btn btn-cta-outline">Conheça os Serviços</a>
        </div>
      </div>
    </div>
  </section>
';

include 'template.php';
?>
