<?php
include 'lang.php';
// $user_ip = $_SERVER['REMOTE_ADDR'];
$user_ip = $_GET['test_ip'] ?? $_SERVER['REMOTE_ADDR'];
// 2. Interroger l'API de géolocalisation
$api_url = "http://ip-api.com/json/" . $user_ip;
$response = file_get_contents($api_url);
$details = json_decode($response);

// 3. Vérifier si le pays est le Maroc (code "MA")
$is_morocco = ($details && $details->status !== 'fail' && $details->countryCode === 'MA');
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
  <script src="app.js" defer></script>
  <link rel="stylesheet" href="style.css" />
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
          <a href="?lang=fr"><img src="https://flagicons.lipis.dev/flags/4x3/fr.svg" alt="FR" width="24" height="18"></a>
          <a href="?lang=en"><img src="https://flagicons.lipis.dev/flags/4x3/gb.svg" alt="EN" width="24" height="18"></a>
        </div>
        <a href="contact.php?lang=<?= $_GET['lang'] ?? 'fr' ?>" class="btn"><?= __('contact') ?></a>
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
          <i data-lucide="database" size="32" color="#b5935b"></i>
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
              <h4 style="font-size: 0.9rem; color: var(--primary); margin-bottom: 10px;">Fondateur & Direction Technique</h4>
              <p style="font-size: 0.9rem; line-height: 1.5;">
                Ingénieur d'État diplômé de l'EMI, Khalid orchestre la vision technologique de JADI DIGITAL. Expert en systèmes critiques et en développement "AI-First".
              </p>
            </div>
            <img src="./img/khalid.png" class="bio-img" alt="Khalid JADI" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; flex-shrink: 0; border: 2px solid var(--gold);">
          </div>
          <a href="#" download class="project-link" style="margin-top: 0; justify-content: center; gap: 10px;">
            <i data-lucide="download" size="18"></i> Télécharger le CV
          </a>
          <div class="social-links" style="display: flex; gap: 15px; justify-content: center; margin-top: 10px;">
            <a href="https://www.linkedin.com/in/khalid-j-a73662254/" target="_blank" style="color: var(--text); transition: color 0.3s;">
              <i data-lucide="linkedin" size="20"></i>
            </a>
          </div>
        </div>

        <div class="project-card" style="display: flex; flex-direction: column; gap: 20px;">
          <div class="bio-item">
            <div style="flex: 1;">
              <h3 style="color: var(--gold); margin-bottom: 5px;">Sara JADI</h3>
              <h4 style="font-size: 0.9rem; color: var(--primary); margin-bottom: 10px;">Direction Produit France</h4>
              <p style="font-size: 0.9rem; line-height: 1.5;">
                Product Owner certifiée, Sara est votre interlocutrice privilégiée à Lille. Elle assure le pont stratégique entre vos objectifs métiers et l'exécution technique.
              </p>
            </div>
            <img src="./img/sara.png" class="bio-img" alt="Sara JADI" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; flex-shrink: 0; border: 2px solid var(--gold);">
          </div>
          <a href="./cv-jadi-sara-po.pdf" download class="project-link" style="margin-top: 0; justify-content: center; gap: 10px;">
            <i data-lucide="download" size="18"></i> Télécharger le CV
          </a>
          <div class="social-links" style="display: flex; gap: 15px; justify-content: center; margin-top: 10px;">
            <a href="https://www.linkedin.com/in/sara-jadi-68729629/" target="_blank" style="color: var(--text); transition: color 0.3s;">
              <i data-lucide="linkedin" size="20"></i>
            </a>
          </div>
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
              <li><?= __('project1_subtitle1') ?></li>
              <li><?= __('project1_subtitle2') ?></li>
            </ul>

            <a href="projet-helpdesk.php?lang=<?= $lang ?>" class="project-link">
              <span><?= __('project_details') ?></span>
              <i data-lucide="arrow-right" size="18"></i>
            </a>
          </div>

          <div class="project-card">
            <div class="project-header">
              <div class="project-icons">
                <i data-lucide="bar-chart-3" class="project-icon"></i>
                <span class="tech-tag">MERN Stack</span>
              </div>
              <a href="https://github.com/jadikhalid/helpdesk_saas" target="_blank" class="github-icon-link">
                <i data-lucide="github" size="20"></i>
              </a>
            </div>
            <h4>Dashboard d'Inventaire</h4>
            <p>Interface de pilotage pour entrepôts. Visualisation dynamique des stocks critiques.</p>
            <ul class="project-features">
              <li>State Management avec React</li>
              <li>Reporting graphique interactif</li>
            </ul>
            <a href="projet-dashboard.php?lang=<?= $lang ?>" class="project-link">
              <span><?= __('project_details') ?></span>
              <i data-lucide="arrow-right" size="18"></i>
            </a>
          </div>

          <div class="project-card">
            <div class="project-header">
              <i data-lucide="calendar-range" class="project-icon"></i>
              <span class="tech-tag">POO • Clean Code</span>
            </div>
            <h4>Réservation de Ressources</h4>
            <p>Moteur de réservation intelligent pour salles et équipements. Focus sur l'ingénierie logicielle.</p>
            <ul class="project-features">
              <li>Algorithme d'anti-chevauchement</li>
              <li>Architecture Orientée Objet</li>
            </ul>
            <a href="projet-reservation.php" class="project-link">
              <span>Voir le projet</span>
              <i data-lucide="arrow-right" size="18"></i>
            </a>
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
  <script src="https://unpkg.com/lucide@latest"></script>
  <script>
    lucide.createIcons();
  </script>
</body>

</html>