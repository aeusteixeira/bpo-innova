<?php
$page_title = 'Contato - BPO Innova';
$page_content = '
    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="hero-bg-contato" role="img" aria-label="Capa com visual moderno e abstrato"></div>
        <div class="hero-overlay"></div>
        <div class="container-fluid">
            <div class="hero-content">
                <h1 class="hero-title mb-3" data-translate="contato.hero_title">Vamos Conversar <br> Sobre o Futuro do <br> Seu Negócio?</h1>
                <p class="hero-sub" data-translate="contato.hero_sub">Integramos governança de serviços, tecnologia de ponta e expertise sênior para transformar
                    seu backoffice em um motor de crescimento. Chega de burocracia, olá performance.</p>
            </div>
            <!-- div class="hero-cta">
        <a href="#contato" class="btn btn-cta-primary">Solicite uma Proposta</a>
        <a href="#servicos" class="btn btn-cta-outline">Conheça os Serviços</a>
      </div -->
        </div>
    </section>

    <!-- Seção de Contato -->
    <section class="py-5" style="background-color: #ffffff;">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center mb-5">
                        <h2 class="display-5 fw-bold mb-4 text-dark" data-translate="contato.titulo_principal">
                            Nossa equipe de especialistas está pronta para entender seus desafios e desenhar a solução ideal para sua empresa.
                        </h2>
                        <p class="fs-5 text-muted" data-translate="contato.subtitulo">
                            Preencha o formulário ou escolha um dos canais abaixo.
                        </p>
                    </div>

                    <div class="row g-5">
                        <!-- Coluna 1: Informações de Contato -->
                        <div class="col-lg-6">
                            <div class="contact-info-section">
                                <h3 class="h3 fw-bold mb-4 text-dark" data-translate="contato.entre_contato_titulo">Entre em Contato</h3>
                                <p class="fs-6 text-muted mb-4" data-translate="contato.entre_contato_desc">Estamos prontos para atender você através dos nossos canais de contato.</p>

                                <div class="contact-items">
                                    <div class="contact-item mb-3">
                                        <div class="contact-icon-wrapper">
                                            <i class="fa-solid fa-phone fa-sm"></i>
                                        </div>
                                        <div class="contact-info">
                                            <h5 class="contact-label mb-1" data-translate="contato.telefone">Telefone</h5>
                                            <p class="contact-value mb-0">+55 11 3197-4267</p>
                                        </div>
                                    </div>

                                    <div class="contact-item mb-3">
                                        <div class="contact-icon-wrapper">
                                            <i class="fa-solid fa-envelope fa-sm"></i>
                                        </div>
                                        <div class="contact-info">
                                            <h5 class="contact-label mb-1" data-translate="contato.email">E-mail</h5>
                                            <p class="contact-value mb-0">comercial@bpoinnova-sp.com</p>
                                        </div>
                                    </div>

                                    <div class="contact-item mb-4">
                                        <div class="contact-icon-wrapper">
                                            <i class="fa-solid fa-location-dot fa-sm"></i>
                                        </div>
                                        <div class="contact-info">
                                            <h5 class="contact-label mb-1" data-translate="contato.endereco">Endereço</h5>
                                            <p class="contact-value mb-0">Av. Queiroz Filho, 1.700 - Torre A - Sala 301<br>São Paulo - SP</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Mapa -->
                                <div class="map-container">
                                    <div class="map-wrapper">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.7032840307684!2d-46.733944199999996!3d-23.5431721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5e5465cfc7a1%3A0xaae37380391b0217!2sBPO%20INNOVA!5e0!3m2!1spt-BR!2sbr!4v1757260422672!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Coluna 2: Formulário -->
                        <div class="col-lg-6">
                            <form class="contact-form">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nome" class="form-label fw-semibold text-dark" data-translate="contato.nome">Nome</label>
                                            <input type="text" class="form-control form-control-lg" id="nome" data-translate-placeholder="contato.nome_placeholder" placeholder="Nome" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="form-label fw-semibold text-dark" data-translate="contato.email_label">E-mail</label>
                                            <input type="email" class="form-control form-control-lg" id="email" data-translate-placeholder="contato.email_placeholder" placeholder="E-mail" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="telefone" class="form-label fw-semibold text-dark" data-translate="contato.telefone_label">Telefone</label>
                                            <input type="tel" class="form-control form-control-lg" id="telefone" data-translate-placeholder="contato.telefone_placeholder" placeholder="(99) 9 999-99999" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="empresa" class="form-label fw-semibold text-dark" data-translate="contato.empresa">Empresa</label>
                                            <input type="text" class="form-control form-control-lg" id="empresa" data-translate-placeholder="contato.empresa_placeholder" placeholder="Empresa" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="assunto" class="form-label fw-semibold text-dark" data-translate="contato.assunto">Assunto</label>
                                            <select class="form-select form-select-lg" id="assunto" required>
                                                <option value="" data-translate="contato.assunto_placeholder">Selecione um assunto</option>
                                                <option value="contabilidade" data-translate="contato.assunto_contabilidade">Serviços de Contabilidade</option>
                                                <option value="fiscal" data-translate="contato.assunto_fiscal">Serviços Fiscais</option>
                                                <option value="financeiro" data-translate="contato.assunto_financeiro">BPO Financeiro</option>
                                                <option value="folha" data-translate="contato.assunto_folha">Folha de Pagamento</option>
                                                <option value="tecnologia" data-translate="contato.assunto_tecnologia">Tecnologia e Inovação</option>
                                                <option value="paralegal" data-translate="contato.assunto_paralegal">Serviços Paralegais</option>
                                                <option value="especiais" data-translate="contato.assunto_especiais">Serviços Especiais</option>
                                                <option value="outros" data-translate="contato.assunto_outros">Outros</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="mensagem" class="form-label fw-semibold text-dark" data-translate="contato.mensagem">Mensagem</label>
                                            <textarea class="form-control form-control-lg" id="mensagem" rows="4" data-translate-placeholder="contato.mensagem_placeholder" placeholder="Mensagem" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-warning btn-lg px-5 w-100">
                                            <i class="fa-solid fa-paper-plane me-2"></i><span data-translate="contato.enviar">Enviar</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Membro GGI -->
    <!--section class="ggi-section">
        <div class="container-fluid">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="ggi-card h-100" style="background: rgba(255,255,255,.06); border-color: rgba(255,255,255,.18);">
                        <div class="section-accent mb-2"></div>
                        <div class="section-kicker">Parcerias globais</div>
                        <h2 class="section-title mb-2">Somos membros da GGI (Geneva Group International)</h2>
                        <p class="section-sub mb-4" style="color: rgba(255,255,255,.85)">A filiação à GGI amplia nosso alcance internacional e conecta a BPO Innova a uma rede de especialistas em mais de 120 países, garantindo suporte local com padrão global.</p>
                        <div class="mb-3">
                            <div class="benefit-item text-white"><i class="fa-solid fa-check text-white"></i><span>Acesso a experts multidisciplinares ao redor do mundo</span></div>
                            <div class="benefit-item text-white"><i class="fa-solid fa-check text-white"></i><span>Boas práticas internacionais e atualização regulatória</span></div>
                            <div class="benefit-item text-white"><i class="fa-solid fa-check text-white"></i><span>Suporte a projetos cross-border com governança</span></div>
                        </div>
                        <a href="#contato" class="btn btn-tile-primary">Fale com nossos consultores</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="logo-badge d-inline-block mb-3">
                        <img src="img/ggi.png" alt="Logo GGI" class="partner-logo">
                    </div>
                    <p class="logo-caption mb-0">GGI é uma das maiores alianças mundiais de firmas independentes de auditoria, contabilidade, direito e consultoria.</p>
                </div>
            </div>
        </div>
    </section-->
';

include 'template.php';
?>
