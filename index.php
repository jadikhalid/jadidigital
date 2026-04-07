<?php include 'lang.php'; ?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="icon" href="./img/favicon.svg" type="image/svg+xml" />
  <title><?= __('meta_title') ?></title>
  <link
    href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="./style.css" />
</head>

<body>
  <div class="maquette-label">
    <span class="label-brand">JADI DIGITAL</span>
    <span class="label-sep">—</span>
    <span class="label-version">v1.0 (Mars 2026)</span>
    <span class="label-sep">—</span>
    <!-- <span class="label-doc">Document de référence design</span>
    <span class="label-sep">—</span> -->
    <div class="lang-switcher">
      <a href="<?= lang_url('fr') ?>" class="<?= $lang == 'fr' ? 'active' : '' ?>">FR</a>
      <span class="lang-sep">/</span>
      <a href="<?= lang_url('en') ?>" class="<?= $lang == 'en' ? 'active' : '' ?>">EN</a>
    </div>
  </div>

  <nav class="nav">
    <a class="nav-logo" href="#">
      <div class="logo-dot"></div>
      <span class="logo-text">JADI <span>DIGITAL</span></span>
    </a>

    <div class="nav-links" id="nav-menu">
      <a href="#a-propos" title="À propos">
        <i data-lucide="info"></i><span><?= __('nav_about') ?></span>
      </a>
      <a href="#nos-services" title="Services">
        <i data-lucide="layers"></i><span><?= __('nav_services') ?></span>
      </a>
      <a href="#nos-expertises" title="Expertises">
        <i data-lucide="cpu"></i><span><?= __('nav_expertises') ?></span>
      </a>
      <a href="#realisations" title="Réalisations">
        <i data-lucide="folder-git-2"></i><span><?= __('nav_realisations') ?></span>
      </a>
      <a href="#faq" title="FAQ">
        <i data-lucide="message-circle-question"></i><span><?= __('nav_faq') ?></span>
      </a>
      <a href="#contact" title="Contact">
        <i data-lucide="mail"></i><span><?= __('nav_contact') ?></span>
      </a>
    </div>

    <div class="nav-right">
      <button class="nav-cta desktop-only" id="cta-nav">
        <?= __('nav_cta') ?> →
      </button>
    </div>
  </nav>

  <section class="hero" id="hero">
    <div class="hero-bg-grid"></div>
    <div class="hero-bg-glow"></div>
    <div class="hero-inner inner">
      <div class="hero-content">
        <div class="hero-badge">
          <div class="hero-badge-dot"></div>
          <?= __('hero_badge') ?>
        </div>
        <h1 class="hero-h1">
          <?= __('hero_title') ?>
        </h1>
        <p class="hero-sub">
          <?= __('hero_sub') ?>
        </p>
        <div class="hero-cta">
          <button class="btn-primary" id="cta-hero-start">
            <?= __('hero_cta_start') ?>
          </button>
          <button class="btn-secondary" id="cta-hero-portfolio">
            <?= __('hero_cta_portfolio') ?>
          </button>
        </div>
        <div class="hero-stats">
          <div>
            <div class="stat-num">15<span>+</span></div>
            <div class="stat-label"><?= __('stat_exp_label') ?></div>
          </div>
          <div>
            <div class="stat-num">3</div>
            <div class="stat-label"><?= __('stat_countries_label') ?></div>
          </div>
          <div>
            <div class="stat-num">100<span>%</span></div>
            <div class="stat-label"><?= __('stat_agile_label') ?></div>
          </div>
          <div>
            <div class="stat-num">AI<span>+</span></div>
            <div class="stat-label"><?= __('stat_ai_label') ?></div>
          </div>
        </div>
      </div>
      <div class="tech-chips">
        <div class="chip">
          <div class="chip-dot" style="background: #60a5fa"></div>
          <span class="chip-label">Full Stack</span> React · Next.js
        </div>
        <div class="chip">
          <div class="chip-dot" style="background: #e8a855"></div>
          <span class="chip-label">AI-Native</span> OpenAI · RAG
        </div>
        <div class="chip">
          <div class="chip-dot" style="background: #34d399"></div>
          <span class="chip-label">Intégration</span> REST · GraphQL
        </div>
        <div class="chip">
          <div class="chip-dot" style="background: #a78bfa"></div>
          <span class="chip-label">Cloud</span> Docker · CI/CD
        </div>
      </div>
    </div>
  </section>

  <section class="section-light" id="nos-services">
    <div class="inner">
      <div class="section-tag"><?= __('services_tag') ?></div>
      <h2 class="section-h2"><?= __('services_title') ?></h2>
      <p class="section-intro">...</p>
      <div class="services-grid">
        <div class="service-card">
          <div class="card-icon icon-bg-blue">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none">
              <rect
                x="2"
                y="5"
                width="18"
                height="13"
                rx="2.5"
                stroke="#1A56DB"
                stroke-width="1.5" />
              <path
                d="M7 9l3.5 3.5L17 6"
                stroke="#1A56DB"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </div>
          <div class="card-title">Développement Web Full Stack</div>
          <div class="card-text">
            De la landing page à la plateforme SaaS, nous développons vos
            applications web et mobile sur-mesure avec React, Next.js, Node.js
            ou PHP/Laravel selon vos besoins.
          </div>
          <div class="card-link">En savoir plus →</div>
        </div>
        <div class="service-card">
          <div class="card-icon icon-bg-purple">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none">
              <circle
                cx="11"
                cy="11"
                r="8"
                stroke="#7C3AED"
                stroke-width="1.5" />
              <path
                d="M8 11c0-1.66 1.34-3 3-3s3 1.34 3 3"
                stroke="#7C3AED"
                stroke-width="1.5"
                stroke-linecap="round" />
              <circle cx="11" cy="15" r="1" fill="#7C3AED" />
            </svg>
          </div>
          <div class="card-title"><?= __('service_ai_title') ?></div>
          <div class="card-text">
            <?= __('service_ai_desc') ?>
          </div>
          <div class="card-link-purple">En savoir plus →</div>
        </div>
        <div class="service-card">
          <div class="card-icon icon-bg-green">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none">
              <path
                d="M5 11h12M13 7l4 4-4 4"
                stroke="#15803D"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </div>
          <div class="card-title"><?= __('service_api_title') ?></div>
          <div class="card-text">
            <?= __('service_api_desc') ?>
          </div>
          <div class="card-link-green">En savoir plus →</div>
        </div>
      </div>
      <div class="u-text-center">
        <button class="btn-primary btn-scroll-contact">
          Discuter de votre projet
        </button>
      </div>
    </div>
  </section>

  <section class="section-gray" id="a-propos">
    <div class="inner">
      <div class="section-tag">À propos</div>
      <h2 class="section-h2">À propos de JADI DIGITAL</h2>
      <div class="apropos-grid">
        <div class="apropos-text">
          <p>
            JADI DIGITAL est une société d'ingénierie logicielle fondée par
            Khalid JADI. Nous concevons et développons des applications web et
            des solutions IA sur-mesure pour les entreprises qui veulent des
            produits digitaux fiables, performants et évolutifs.
          </p>
          <div class="apropos-blocs">
            <div class="apropos-bloc">
              <div class="apropos-bloc-title">Notre vision</div>
              <div class="apropos-bloc-text">
                La technologie ne crée de la valeur que lorsqu'elle résout un
                vrai problème métier. Chaque projet commence par une écoute
                attentive de vos enjeux, avant d'écrire une seule ligne de
                code.
              </div>
            </div>
            <div class="apropos-bloc">
              <div class="apropos-bloc-title">Notre approche</div>
              <div class="apropos-bloc-text">
                Rigueur technique, communication transparente, engagement sur
                les résultats. Nous ne livrons pas un projet — nous
                construisons une relation.
              </div>
            </div>
            <div class="apropos-bloc">
              <div class="apropos-bloc-title">Notre engagement</div>
              <div class="apropos-bloc-text">
                Chaque produit que nous livrons est testé, documenté et conçu
                pour durer. Pas de raccourcis, pas de compromis sur la qualité
                — parce que votre réussite est la nôtre.
              </div>
            </div>
          </div>
          <button class="btn-primary btn-scroll-contact">
            Démarrer un projet
          </button>
        </div>
        <div class="apropos-card">
          <div class="card-label-mini">
            Fondateur
          </div>
          <div class="team-header">
            <div class="team-avatar">KJ</div>
            <div>
              <div class="team-name">Khalid JADI</div>
              <div class="team-role">Fondateur & CTO</div>
            </div>
          </div>
          <div class="team-tags">
            <span class="team-tag">Expert Full Stack & IA</span>
            <span class="team-tag">MS Software Engineering</span>
          </div>
          <div class="team-bio">
            Ingénieur logiciel spécialisé en systèmes critiques et
            architecture AI-native. Il a conçu et livré des plateformes à
            forte exigence technique : applications web et mobile, systèmes à
            haute disponibilité, solutions intégrant l'intelligence
            artificielle. Chez JADI DIGITAL, il pilote chaque décision
            d'architecture avec une conviction constante : la technologie ne
            crée de la valeur que si elle résout un vrai problème métier.
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-dark" id="nos-expertises">
    <div class="inner">
      <div class="section-tag-gold">Nos expertises</div>
      <h2 class="section-h2-dark">Technologies maîtrisées en profondeur</h2>
      <p class="section-intro-dark">
        Au-delà des services que nous proposons, voici les technologies et
        domaines que nous maîtrisons en profondeur.
      </p>
      <div class="exp-grid">
        <div class="exp-card">
          <div class="exp-num">01 /</div>
          <div class="exp-title">Développement Web & IA</div>
          <div class="exp-tags">
            <span class="exp-tag">React</span><span class="exp-tag">Next.js</span><span class="exp-tag">Node.js</span><span class="exp-tag">NestJS</span><span class="exp-tag">Express.js</span><span class="exp-tag">PHP / Laravel</span><span class="exp-tag">OpenAI API</span><span class="exp-tag">RAG</span><span class="exp-tag">LangChain</span>
          </div>
        </div>
        <div class="exp-card">
          <div class="exp-num">02 /</div>
          <div class="exp-title">Ingénierie logicielle</div>
          <div class="exp-tags">
            <span class="exp-tag">C / C++</span><span class="exp-tag">Python</span><span class="exp-tag">Java</span><span class="exp-tag">System Design</span><span class="exp-tag">Algorithmic Optimization</span><span class="exp-tag">Linux</span><span class="exp-tag">Docker</span>
          </div>
        </div>
        <div class="exp-card">
          <div class="exp-num">03 /</div>
          <div class="exp-title">Intégration & API</div>
          <div class="exp-tags">
            <span class="exp-tag">REST API</span><span class="exp-tag">GraphQL</span><span class="exp-tag">Webhooks</span><span class="exp-tag">Event-driven</span><span class="exp-tag">OAuth 2.0</span><span class="exp-tag">JWT</span><span class="exp-tag">Swagger / OpenAPI</span><span class="exp-tag">Postman</span>
          </div>
        </div>
        <div class="exp-card">
          <div class="exp-num">04 /</div>
          <div class="exp-title">Cloud & DevOps</div>
          <div class="exp-tags">
            <span class="exp-tag">Déploiement cloud</span><span class="exp-tag">Hébergement</span><span class="exp-tag">CI/CD</span><span class="exp-tag">Scalabilité</span><span class="exp-tag">Monitoring</span><span class="exp-tag">Environnements production</span>
          </div>
        </div>
      </div>
      <div class="u-text-center u-mt-40">
        <button class="btn-secondary btn-scroll-portfolio">
          Voir nos réalisations
        </button>
      </div>
    </div>
  </section>

  <div class="reassurance">
    <div class="reassurance-grid">
      <div class="reassurance-item">
        <div class="reassurance-icon">🔒</div>
        <div class="reassurance-title">Engagement qualité</div>
        <div class="reassurance-sub">
          Code testé, documenté et maintenable
        </div>
      </div>
      <div class="reassurance-item">
        <div class="reassurance-icon">⏱️</div>
        <div class="reassurance-title">Réponse sous 24h</div>
        <div class="reassurance-sub">
          Premier échange gratuit et sans engagement
        </div>
      </div>
      <div class="reassurance-item">
        <div class="reassurance-icon">🌍</div>
        <div class="reassurance-title">International</div>
        <div class="reassurance-sub">
          Nous intervenons partout où vos projets nous emmènent
        </div>
      </div>
      <div class="reassurance-item">
        <div class="reassurance-icon">🤝</div>
        <div class="reassurance-title">Partenariat durable</div>
        <div class="reassurance-sub">
          Maintenance, hébergement et évolutions post-lancement
        </div>
      </div>
    </div>
  </div>

  <section class="section-light" id="realisations">
    <div class="inner">
      <div class="section-tag">Réalisations</div>
      <h2 class="section-h2">Projets JADI DIGITAL</h2>
      <p class="section-intro">
        Des projets livrés avec rigueur, de la spec à la mise en production.
      </p>
      <div class="portfolio-grid">
        <div class="portfolio-card">
          <div class="portfolio-header">
            <div class="portfolio-tags">
              <span class="portfolio-tag">PHP</span>
              <span class="portfolio-tag">MySQL</span>
              <span class="portfolio-tag">SMTP</span>
            </div>
          </div>
          <div class="portfolio-body">
            <div class="portfolio-title">SaaS Helpdesk & Ticketing</div>
            <div class="portfolio-text">
              Système de gestion de réclamations clients haute performance.
              Logique métier complexe, base de données relationnelle
              optimisée, automatisation d'emails.
            </div>
            <a class="portfolio-link" href="#">Voir le projet →</a>
          </div>
        </div>
        <div class="portfolio-card">
          <div class="portfolio-header">
            <div class="portfolio-tags">
              <span class="portfolio-tag">IA</span>
              <span class="portfolio-tag">RAG</span>
              <span class="portfolio-tag">Python</span>
            </div>
          </div>
          <div class="portfolio-body">
            <div class="portfolio-title">
              Intégration RAG — Application métier
            </div>
            <div class="portfolio-text">
              Intégration d'un système RAG (Retrieval-Augmented Generation)
              dans une application métier existante pour automatiser le
              traitement documentaire.
            </div>
            <a class="portfolio-link" href="#">Voir le projet →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-gray" id="faq">
    <div class="inner faq-inner-width">
      <div class="section-tag">FAQ</div>
      <h2 class="section-h2">Questions fréquentes</h2>
      <p class="section-intro">
        Tout ce que vous voulez savoir avant de nous contacter.
      </p>
      <div class="faq-list">
        <div class="faq-item">
          <div class="faq-q">
            <span>Travaillez-vous avec des startups ou uniquement des grandes
              entreprises ?</span><span class="faq-icon">+</span>
          </div>
          <div class="faq-a">
            Nous accompagnons tous types de structures : startups en phase de
            lancement, scale-ups en croissance rapide et PME en transformation
            digitale. Nous adaptons notre approche et notre investissement à
            votre stade de maturité — pas de modèle unique.
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-q">
            <span>Comment se déroule un projet chez JADI DIGITAL ?</span><span class="faq-icon">+</span>
          </div>
          <div class="faq-a">
            Chaque projet commence par un échange pour comprendre vos besoins
            et définir le périmètre. Nous établissons ensuite une feuille de
            route claire avec des étapes et des livrables définis — pour
            avancer de façon structurée et transparente.
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-q">
            <span>Proposez-vous des prestations en régie ou au forfait ?</span><span class="faq-icon">+</span>
          </div>
          <div class="faq-a">
            Les deux, selon votre situation. Un projet avec un périmètre
            défini ? Nous travaillons au forfait. Vous avez besoin d'un
            renfort technique sur la durée ? Nous intervenons en régie avec
            une disponibilité adaptée à vos besoins.
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-q">
            <span>Proposez-vous du développement intégrant l'intelligence
              artificielle ?</span><span class="faq-icon">+</span>
          </div>
          <div class="faq-a">
            Oui, c'est l'un de nos axes forts. Nous concevons des applications
            AI-native intégrant des modèles de langage (LLM), des systèmes RAG
            et des pipelines d'automatisation intelligente — depuis la
            définition du cas d'usage jusqu'au déploiement en production.
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-q">
            <span>Combien coûte un projet avec JADI DIGITAL ?</span><span class="faq-icon">+</span>
          </div>
          <div class="faq-a">
            Le coût dépend du périmètre et de la complexité du projet. Nous
            proposons un premier échange gratuit pour comprendre votre besoin
            et vous soumettre une estimation claire avant tout engagement.
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-dark" id="nous-rejoindre">
    <div class="inner">
      <div class="rejoindre-card">
        <div class="rejoindre-content">
          <h3>Rejoignez l'aventure JADI DIGITAL</h3>
          <p>
            Nous construisons une équipe d'experts passionnés par la
            technologie et l'innovation. Si vous êtes développeur Full Stack,
            ingénieur IA ou architecte logiciel et que vous souhaitez
            travailler sur des projets ambitieux, nous serions ravis
            d'échanger avec vous.
          </p>
        </div>
        <button class="btn-or">Candidater →</button>
      </div>
    </div>
  </section>

  <section class="section-dark" id="contact">
    <div class="contact-grid inner">
      <form class="contact-form" id="contact-form" action="sendEmail.php" method="POST">
        <h3 class="form-title"><?= __('contact_title') ?></h3>
        <p class="form-subtitle">
          <?= __('contact_subtitle') ?>
        </p>

        <div class="form-group">
          <label class="form-label"><?= __('form_name') ?></label>
          <input class="form-input" type="text" name="name" placeholder="Votre nom" required />
        </div>
        <div class="form-group">
          <label class="form-label"><?= __('form_email') ?></label>
          <input class="form-input" type="email" name="email" placeholder="votre@email.com" required />
        </div>
        <div class="form-group">
          <label class="form-label"><?= __('form_company') ?></label>
          <input class="form-input" type="text" name="company" placeholder="Nom de votre entreprise" />
        </div>
        <div class="form-group">
          <label class="form-label"><?= __('form_subject') ?></label>
          <select class="form-select" name="subject" required>
            <option value="">Sélectionnez un sujet</option>
            <option>Web Dev</option>
            <option>AI / LLM</option>
          </select>
        </div>
        <div class="form-group">
          <label class="form-label"><?= __('form_message') ?></label>
          <textarea class="form-textarea" name="message" placeholder="Décrivez votre projet..." required></textarea>
        </div>

        <div class="form-privacy">
          En soumettant ce formulaire, vous acceptez notre
          <a href="#">politique de confidentialité</a>.
        </div>

        <button type="submit" class="form-submit"><?= __('form_submit') ?></button>
      </form>

      <div class="contact-info">
        <h3>Nos coordonnées</h3>
        <p>
          Basés au Maroc avec une présence en France, nous accompagnons des
          clients à l'international. Réponse garantie sous 24h ouvrées.
        </p>
        <div class="contact-details">
          <div class="contact-detail">
            <div class="contact-detail-icon">📧</div>
            <span>contact@jadidigital.com</span>
          </div>
          <div class="contact-detail">
            <div class="contact-detail-icon">⏱️</div>
            <span>Réponse sous 24h ouvrées</span>
          </div>
          <div class="contact-detail">
            <div class="contact-detail-icon">🌍</div>
            <span>Maroc · France · International</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="footer-inner">
      <div class="footer-grid">
        <div>
          <div class="footer-logo">JADI <span>DIGITAL</span></div>
          <div class="footer-desc">
            <?= __('footer_desc') ?>
          </div>
          <div class="footer-email">contact@jadidigital.com</div>
        </div>
        <div>
          <div class="footer-h">Services</div>
          <div class="footer-links">
            <a href="#">Développement Web Full Stack</a>
            <a href="#">Architecture IA</a>
            <a href="#">Intégration & API</a>
          </div>
        </div>
        <div>
          <div class="footer-h">Entreprise</div>
          <div class="footer-links">
            <a href="#">À propos</a>
            <a href="#">Réalisations</a>
            <a href="#">Actualités</a>
            <a href="#">Contact</a>
          </div>
        </div>
        <div>
          <div class="footer-h">Légal</div>
          <div class="footer-links">
            <a href="#">Mentions légales</a>
            <a href="#">Politique de confidentialité</a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="footer-copyright">
          <?= __('footer_copyright') ?>
        </div>
      </div>
    </div>
  </footer>

  <script src="app.js"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
</body>

</html>