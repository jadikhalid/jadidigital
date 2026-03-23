<?php
include 'lang.php';
include 'origineIP.php';

?>

<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./img/favicon.svg" type="image/svg+xml" />
  <title>
    JADI DIGITAL | Khalid Jadi - Entrepreneur Tech & Ingénieur Full Stack
  </title>
  <script src="/app.js" defer></script>
  <link rel="stylesheet" href="/style.css" />
</head>

<body>
  <?php if ($is_morocco): ?>
    <div style="background-color: #000000; width: 100vw; height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center; color: white; text-align: center; padding: 20px;">
      <h1>Bienvenue ...</h1>
    </div>
  <?php else: ?>
    <nav>
      <a href="#" class="logo" onclick="event.preventDefault();">JADI<span> DIGITAL</span></a>

      <div class=" nav-right">
        <div class="lang-switcher">
          <a href="/accueil"><img src="https://flagicons.lipis.dev/flags/4x3/fr.svg" alt="FR" width="24" height="18"></a>
          <a href="/welcome"><img src="https://flagicons.lipis.dev/flags/4x3/gb.svg" alt="EN" width="24" height="18"></a>
        </div>
        <a href="<?= ($lang == 'fr') ? 'contact-fr' : 'contact-en' ?>" class="btn"><?= __('contact') ?></a>
      </div>
    </nav>
    <header class="hero">
      <div>
        <span class="section-tag"><?= __('auteur') ?></span>
        <h1><?= __("hero_title") ?></h1>
        <p>
          <?= __("hero_desc") ?>
        </p>
        <button class="btn" onclick="openPortfolio()">
          <?= __("portfolio") ?>
        </button>
      </div>
      <div style="text-align: right">
        <div
          class="conteneur-image"
          style="
            width: 100%;
            height: 350px;
            background: #e2e8f0;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #94a3b8;
            /* border: 2px dashed #cbd5e1; */
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
          ">
          <img
            src="./img/jadidigitalmeeting.jpg"
            alt=""
            style="width: 100%; height: 100%; object-fit: cover" />
        </div>
      </div>
    </header>

    <section class="expertise">
      <span class="section-tag" style="text-align: center"><?= __("expertise_mini_title") ?></span>
      <h2 style="text-align: center; font-size: 2.5rem; color: var(--primary)">
        <?= __("expertise_title") ?>
      </h2>
      <div class="grid">
        <div class="card">
          <i data-lucide="code-2" size="32" color="#b5935b"></i>
          <h3><?= __("expertise_descr1_title") ?></h3>
          <p>
            <?= __("expertise_descr1_desc") ?>
          </p>
        </div>
        <div class="card">
          <i data-lucide="layers" size="32" color="#b5935b"></i>
          <h3><?= __("expertise_descr2_title") ?></h3>
          <p>
            <?= __("expertise_descr2_desc") ?>
          </p>
        </div>
        <div class="card">
          <i data-lucide="briefcase" size="32" color="#b5935b"></i>
          <h3><?= __("expertise_descr3_title") ?></h3>
          <p>
            <?= __("expertise_descr3_desc") ?>
          </p>
        </div>
      </div>
    </section>

    <section class="bio">
      <div style="text-align: center; margin-bottom: 50px">
        <span class="section-tag"><?= __('team_mini_title') ?></span>
        <h2 style="font-size: 2.2rem; color: var(--primary)">
          <?= __('team_title') ?>
        </h2>
      </div>

      <div class="grid">
        <div class="project-card" style="display: flex; flex-direction: column; gap: 20px;">
          <div class="bio-item">
            <div style="flex: 1;">
              <h3 style="color: var(--gold); margin-bottom: 5px;">Khalid JADI</h3>
              <h4 style="font-size: 0.9rem; color: var(--primary); margin-bottom: 10px;"><?= __('khalid_titre') ?></h4>
              <p style="font-size: 0.9rem; line-height: 1.5;">
                <?= __('khalid_desc') ?>
              </p>
            </div>
            <img src="./img/khalid.png" class="bio-img" alt="Khalid JADI" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; flex-shrink: 0; border: 2px solid var(--gold);">
          </div>
          <div style="display: flex; flex-direction: column; flex-wrap: wrap; gap: 20px; margin-top: 10px; padding-top: 10px; border-top: 1px solid rgba(255,215,0,0.1);margin-bottom: 10px;">
            <div style="display: flex; align-items: center; gap: 8px; font-size: 0.85rem; color: var(--text);">
              <i data-lucide="binary" size="16" style="color: var(--gold);"></i>
              <span>Expert Full Stack & IA</span>
            </div>
            <div style="display: flex; align-items: center; gap: 8px; font-size: 0.85rem; color: var(--text);">
              <i data-lucide="trending-up" size="16" style="color: var(--gold);"></i>
              <span>Strategic Planning & Business Vision</span>
            </div>
            <div style="display: flex; align-items: center; gap: 8px; font-size: 0.85rem; color: var(--text);">
              <i data-lucide="graduation-cap" size="16" style="color: var(--gold);"></i>
              <span>MS in Software Engineering</span>
            </div>
          </div>
          <hr style="border: 0; height: 1px; background: rgba(0, 0, 0, 0.1); margin: 20px 0 0 0;">
          <div class="social-links" style="display: flex; gap: 20px; justify-content: center; margin-top: 10px;">
            <a href="https://www.linkedin.com/in/khalid-j-a73662254/" target="_blank" style="color: var(--text); transition: color 0.3s;">
              <i data-lucide="linkedin" size="20"></i>
            </a> |
            <a href="https://github.com/jadikhalid" target="_blank" style="color: var(--text); transition: color 0.3s;">
              <i data-lucide="github" size="20"></i>
            </a>
          </div>
        </div>

        <div class="project-card" style="display: flex; flex-direction: column; gap: 20px;">
          <div class="bio-item">
            <div style="flex: 1;">
              <h3 style="color: var(--gold); margin-bottom: 5px;">Sara JADI</h3>
              <h4 style="font-size: 0.9rem; color: var(--primary); margin-bottom: 10px;"><?= __('sara_titre') ?></h4>
              <p style="font-size: 0.9rem; line-height: 1.5;">
                <?= __('sara_desc') ?>
              </p>
            </div>
            <img src="./img/sara.png" class="bio-img" alt="Sara JADI" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; flex-shrink: 0; border: 2px solid var(--gold);">
          </div>
          <div style="display: flex; flex-direction: column; flex-wrap: wrap; gap: 20px; margin-top: 10px; padding-top: 10px; border-top: 1px solid rgba(255,215,0,0.1);margin-bottom: 10px;">
            <div style="display: flex; align-items: center; gap: 8px; font-size: 0.85rem; color: var(--text);">
              <i data-lucide="layers" size="16" style="color: var(--gold);"></i>
              <span>Senior Product Owner (10+ years exp.)</span>
            </div>
            <div style="display: flex; align-items: center; gap: 8px; font-size: 0.85rem; color: var(--text);">
              <i data-lucide="shield-check" size="16" style="color: var(--gold);"></i>
              <span>FinTech & Regulatory Expertise</span>
            </div>
            <div style="display: flex; align-items: center; gap: 8px; font-size: 0.85rem; color: var(--text);">
              <i data-lucide="graduation-cap" size="16" style="color: var(--gold);"></i>
              <span>Master’s Degree in Marketing and Business Management</span>
            </div>
          </div>
          <hr style="border: 0; height: 1px; background: rgba(0, 0, 0, 0.1); margin: 20px 0 0 0;">
          <div class="social-links" style="display: flex; gap: 15px; justify-content: center; margin-top: 10px;">
            <a href="https://www.linkedin.com/in/sara-jadi-68729629/" target="_blank" style="color: var(--text); transition: color 0.3s;">
              <i data-lucide="linkedin" size="20"></i>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="expertise" style="background-color: var(--light-bg); padding: 80px 8%;">
      <div style="text-align: center; margin-bottom: 50px">
        <span class="section-tag"><?= __('tools_mini_title') ?></span>
        <h2 style="font-size: 2.2rem; color: var(--primary); margin-top: 10px;">
          <?= __('tools_title') ?>
        </h2>
      </div>

      <div class="grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">

        <div class="card" style="padding: 30px;">
          <i data-lucide="box" size="32" color="var(--gold)" style="margin-bottom: 15px;"></i>
          <h3 style="color: var(--primary); margin-bottom: 15px;"><?= __('card1_title') ?></h3>
          <h4 style="font-size: 0.95rem; color: var(--gold); margin-bottom: 10px;"><?= __('card1_mini_title') ?></h4>
          <p style="font-size: 0.9rem; margin-bottom: 15px;"><?= __('card1_desc') ?></p>
          <ul style="list-style: none; font-size: 0.85rem; color: var(--text);">
            <li style="margin-bottom: 5px;">• React / Next.js</li>
            <li style="margin-bottom: 5px;">• Node.js / NestJS || Express.js</li>
            <li style="margin-bottom: 5px;">• PHP / Laravel</li>
            <li style="margin-bottom: 5px;">• OpenAI API / RAG</li>
          </ul>
        </div>

        <div class="card" style="padding: 30px;">
          <i data-lucide="cpu" size="32" color="var(--gold)" style="margin-bottom: 15px;"></i>
          <h3 style="color: var(--primary); margin-bottom: 15px;"><?= __('card2_title') ?></h3>
          <h4 style="font-size: 0.95rem; color: var(--gold); margin-bottom: 10px;"><?= __('card2_mini_title') ?></h4>
          <p style="font-size: 0.9rem; margin-bottom: 15px;"><?= __('card2_desc') ?></p>
          <ul style="list-style: none; font-size: 0.85rem; color: var(--text);">
            <li style="margin-bottom: 5px;">• C / C++ / Python / Java</li>
            <li style="margin-bottom: 5px;">• System Design</li>
            <li style="margin-bottom: 5px;">• Algorithmic Optimization</li>
            <li style="margin-bottom: 5px;">• Linux / Docker</li>
          </ul>
        </div>

        <div class="card" style="padding: 30px;">
          <i data-lucide="briefcase" size="32" color="var(--gold)" style="margin-bottom: 15px;"></i>
          <h3 style="color: var(--primary); margin-bottom: 15px;"><?= __('card3_title') ?></h3>
          <h4 style="font-size: 0.95rem; color: var(--gold); margin-bottom: 10px;"><?= __('card3_mini_title') ?></h4>
          <p style="font-size: 0.9rem; margin-bottom: 15px;"><?= __('card3_desc') ?></p>
          <ul style="list-style: none; font-size: 0.85rem; color: var(--text);">
            <li style="margin-bottom: 5px;">• Agile / Scrum</li>
            <li style="margin-bottom: 5px;">• Product Discovery / Users Stories</li>
            <li style="margin-bottom: 5px;">• MoSCoW ou RICE</li>
            <li style="margin-bottom: 5px;">• Jira, Figma, etc...</li>

          </ul>
        </div>
      </div>
    </section>

    <button id="portfolio-trigger" onclick="openPortfolio()">
      <i data-lucide="layers" size="20"></i> <span class="btn-text"><?= __("portfolio_title") ?></span>
    </button>

    <div id="portfolioModal">
      <div class="modal-content">
        <span class="close-modal" onclick="closePortfolio()">&times;</span>
        <span class="section-tag"><?= __("portfolio_sub_title") ?></span>
        <h2 style="font-size: 2.2rem; color: var(--primary); margin-bottom: 30px; letter-spacing: -1px;">
          <?= __("portfolio_sub_title2") ?>
        </h2>

        <div class="portfolio-grid">
          <div class="project-card">
            <div class="project-header">
              <div class="project-icons">
                <i data-lucide="ticket-check" class="project-icon"></i>
                <span class="tech-tag">PHP • MySQL</span>
              </div>
              <a href="https://github.com/jadikhalid/helpdesk_saas" target="_blank" class="github-icon-link">
                <i data-lucide="github" size="20"></i>
              </a>
            </div>
            <h4>SaaS Helpdesk & Ticketing</h4>
            <p><?= __('project1_desc') ?></p>
            <ul class="project-features">
              <li><?= __('project1_subtitle0') ?></li>
              <li><?= __('project1_subtitle1') ?></li>
              <li><?= __('project1_subtitle2') ?></li>
            </ul>
            <a href="<?= ($lang == 'fr') ? 'solutions/helpdesk-fr' : 'solutions/helpdesk-en' ?>" class="project-link">
              <span><?= __('project_details') ?></span>
              <i data-lucide="arrow-right" size="18"></i>
            </a>
          </div>

          <div class="project-card">
            <div class="project-header">
              <div class="project-icons">
                <i data-lucide="credit-card" class="project-icon"></i>
                <span class="tech-tag">Agile • Fintech • VISA</span>
              </div>
            </div>
            <h4><?= __('project2_title') ?></h4>
            <p><?= __('project2_desc') ?></p>
            <ul class="project-features">
              <li><?= __('project2_subtitle1') ?></li>
              <li><?= __('project2_subtitle2') ?></li>
              <li><?= __('project2_subtitle3') ?></li>
            </ul>
            <a href="<?= ($lang == 'fr') ? 'projets/visa-fr' : 'projets/visa-en' ?>" class="project-link">
              <span><?= __('project_details') ?></span>
              <i data-lucide="arrow-right" size="18"></i>
            </a>
          </div>
          <div class="project-card">
            <!-- <div class="project-header">
              <div class="project-icons">
                <i data-lucide="bar-chart-3" class="project-icon"></i>
                <span class="tech-tag">...</span>
              </div>
            </div>
            <h4>...</h4>
            <p>...</p>
            <ul class="project-features">
              <li>...</li>
              <li>...</li>
            </ul>
            <a href="#" class="project-link">
              <span><?= __('project_details') ?></span>
              <i data-lucide="arrow-right" size="18"></i>
            </a> -->
          </div>
        </div>
      </div>
    </div>

    <footer>
      <a href="#" class="logo" style="color: white; font-size: 2rem">JADI<span> DIGITAL</span></a>
      <p style="margin: 20px 0; opacity: 0.7">
        <?= __("footer_title") ?>
      </p>
      <div style="margin-top: 40px; font-size: 0.8rem; opacity: 0.4">
        &copy; 2026 JADI DIGITAL | Casablanca | Paris | New York
      </div>
    </footer>
  <?php endif; ?>
  <script src="https://unpkg.com/lucide@0.473.0/dist/umd/lucide.js"></script>

  <script>
    // On s'assure que le document est prêt
    window.addEventListener('load', () => {
      lucide.createIcons();
    });
  </script>
</body>

</html>