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
        <a href="contact.php" class="btn"><?= __('contact') ?></a>
      </div>
    </nav>
    <header class="hero">
      <div>
        <span class="section-tag">Khalid Jadi - Entrepreneur Tech & Ingénieur Full Stack</span>
        <h1>Je conçois vos outils numériques de demain.</h1>
        <p>
          Ancien cadre dirigeant reconverti dans l'ingénierie logicielle, je
          mets 20 ans d'expertise métier au service de vos projets digitaux les
          plus ambitieux.
        </p>
        <button class="btn" onclick="openPortfolio()">
          Explorer mon Portfolio
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
          <!-- <i data-lucide="user" size="80"></i> -->
        </div>
      </div>
    </header>

    <section class="expertise">
      <span class="section-tag" style="text-align: center">Mon Savoir-Faire</span>
      <h2 style="text-align: center; font-size: 2.5rem; color: var(--primary)">
        Expertise Technique & Métier
      </h2>
      <div class="grid">
        <div class="card">
          <i data-lucide="code-2" size="32" color="#b5935b"></i>
          <h3>Expertise Full Stack</h3>
          <p>
            Maîtrise avancée des écosystèmes de développement web modernes
            (Front & Back End) pour des applications performantes
            et scalables.
          </p>
        </div>
        <div class="card">
          <i data-lucide="database" size="32" color="#b5935b"></i>
          <h3>Développement "AI-First"</h3>
          <p>
            Conception d'architectures logicielles intégrant l'IA générative
            pour des fonctionnalités prédictives et sur-mesure.
          </p>
        </div>
        <div class="card">
          <i data-lucide="briefcase" size="32" color="#b5935b"></i>
          <h3>Vision Business</h3>
          <p>
            Maîtrise complète de la chaîne de valeur et des enjeux financiers
            pour des architectures technologiques rentables et optimisées.
          </p>
        </div>
      </div>
    </section>

    <section class="bio">
      <div style="text-align: center; margin-bottom: 50px">
        <span class="section-tag">Mon Parcours</span>
        <h2 style="font-size: 2.2rem; color: var(--primary)">
          Une trajectoire d'Ingénieur et de Dirigeant
        </h2>
      </div>
      <div class="timeline">
        <div class="timeline-item left">
          <div class="content-box">
            <span class="date-tag">2023 - PRÉSENT</span>
            <h4>JADI DIGITAL</h4>
            <p>Ingénierie logicielle & Web, (MA, FR, US)</p>
          </div>
        </div>
        <div class="timeline-item right">
          <div class="content-box">
            <span class="date-tag">2022 - 2023</span>
            <h4>Master of Science</h4>
            <p>MS in Computer Science, UMD. MD, US</p>
          </div>
        </div>
        <div class="timeline-item left">
          <div class="content-box">
            <span class="date-tag">2018 - 2022</span>
            <h4>Gérant - MPGB SARL</h4>
            <p>Aménagement d'espaces tertiaires, MA</p>
          </div>
        </div>
        <div class="timeline-item right">
          <div class="content-box">
            <span class="date-tag">2005 - 2018</span>
            <h4>Directeur des Achats Groupe</h4>
            <p>Groupe Bancaire, MA</p>
          </div>
        </div>
        <div class="timeline-item left">
          <div class="content-box">
            <span class="date-tag">2003 - 2005</span>
            <h4>Directeur Commercial</h4>
            <p>Acteur Métallurgique, MA</p>
          </div>
        </div>
        <div class="timeline-item right">
          <div class="content-box">
            <span class="date-tag">2000 - 2003</span>
            <h4>Ingénieur d'État, Génie Industriel</h4>
            <p>Ecole d'Ingénieurs, EMI. Rabat, MA</p>
          </div>
        </div>
      </div>
    </section>

    <button id="portfolio-trigger" onclick="openPortfolio()">
      <i data-lucide="layers" size="20"></i> <span class="btn-text">Mon Portfolio</span>
    </button>

    <div id="portfolioModal">
      <div class="modal-content">
        <span class="close-modal" onclick="closePortfolio()">&times;</span>
        <span class="section-tag">Réalisations</span>
        <h2 style="font-size: 2.2rem; color: var(--primary); margin-bottom: 30px; letter-spacing: -1px;">
          Projets JADI DIGITAL
        </h2>

        <div class="portfolio-grid">
          <div class="project-card">
            <div class="project-header">
              <i data-lucide="ticket-check" class="project-icon"></i>
              <span class="tech-tag">PHP • MySQL</span>
            </div>
            <h4>SaaS Helpdesk & Ticketing</h4>
            <p>Système de gestion de réclamations clients haute performance. Intègre une logique métier complexe.</p>
            <ul class="project-features">
              <li>Base de données relationnelle optimisée</li>
              <li>Automatisation d'emails (SMTP)</li>
            </ul>
            <a href="projet-helpdesk.php" class="project-link">
              <span>Voir le projet</span>
              <i data-lucide="arrow-right" size="18"></i>
            </a>
          </div>

          <div class="project-card">
            <div class="project-header">
              <i data-lucide="bar-chart-3" class="project-icon"></i>
              <span class="tech-tag">MERN Stack</span>
            </div>
            <h4>Dashboard d'Inventaire</h4>
            <p>Interface de pilotage pour entrepôts. Visualisation dynamique des stocks critiques.</p>
            <ul class="project-features">
              <li>State Management avec React</li>
              <li>Reporting graphique interactif</li>
            </ul>
            <a href="projet-dashboard.php" class="project-link">
              <span>Voir le projet</span>
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
        Expertise Tech & Conseil Stratégique.
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