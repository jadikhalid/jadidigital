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
    <title>SaaS Helpdesk | JADI DIGITAL</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body style="background-color: var(--light-bg);">
    <?php if ($is_morocco): ?>
        <div style="background-color: #000000; width: 100vw; height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center; color: white; text-align: center; padding: 20px;">
            <h1>Bienvenue ...</h1>
        </div>
    <?php else: ?>

        <nav>
            <a href="index.php?lang=<?= $_GET['lang'] ?? 'fr' ?>" class="logo">JADI<span> DIGITAL</span></a>

            <div class=" nav-right">
                <div class="lang-switcher">
                    <a href="?lang=fr"><img src="https://flagicons.lipis.dev/flags/4x3/fr.svg" alt="FR" width="24" height="18"></a>
                    <a href="?lang=en"><img src="https://flagicons.lipis.dev/flags/4x3/gb.svg" alt="EN" width="24" height="18"></a>
                </div>
                <a href="index.php?lang=<?= $_GET['lang'] ?? 'fr' ?>" class="btn" style="display: flex; align-items: center; justify-content: center; gap: 5px;">
                    <?= __('contact_retour') ?>
                </a>
            </div>
        </nav>

        <main class="project-detail-container">

            <header class="project-detail-header">
                <span class="section-tag"><?= __('project1_page_mini_title') ?></span>
                <h1>SaaS Helpdesk & Ticketing</h1>
                <div class="tech-stack">
                    <span class="tech-tag">PHP</span>
                    <span class="tech-tag">MySQL</span>
                    <span class="tech-tag">Architecture MVC</span>
                    <span class="tech-tag">PHPMailer</span>
                </div>
            </header>

            <div class="project-main-grid">

                <div class="project-content">
                    <h3 style="color: var(--gold); margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                        <i data-lucide="target" size="20"></i> <?= __('project1-page-header1') ?>
                    </h3>
                    <p style="margin-bottom: 25px;">
                        <?= __('project1-page-desc1') ?>
                    </p>

                    <h3 style="color: var(--gold); margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                        <i data-lucide="cpu" size="20"></i> <?= __('project1-page-header2') ?>
                    </h3>
                    <ul class="project-features">
                        <li><strong><?= __('project1_page-table_1') ?></strong> <span><?= __('project1_page-table_2') ?></span></li>
                        <li><strong><?= __('project1_page-table_3') ?></strong> <span><?= __('project1_page-table_4') ?></span></li>
                        <li><strong><?= __('project1_page-table_5') ?></strong> <span><?= __('project1_page-table_6') ?>.</span></li>
                    </ul>
                    <div style="margin-top: 30px; padding: 20px; border-top: 1px solid #eee;">
                        <h3 style="color: var(--gold); margin-bottom: 10px;"><?= __('project1_page_access_title') ?></h3>
                        <a href="https://jadi-digital.com/helpdesk_saas"
                            target="_blank"
                            rel="noopener noreferrer"
                            style="display: inline-flex; align-items: center; gap: 8px; background-color: var(--gold); color: #000; padding: 12px 25px; text-decoration: none; border-radius: 5px; font-weight: bold; transition: opacity 0.3s;">
                            <i data-lucide="external-link" size="18"></i>
                            <?= __('project1_page_access_button') ?>
                        </a>
                    </div>
                </div>

                <aside class="project-sidebar">
                    <h4>Impact & Metrics</h4>
                    <div class="key-point">
                        <i data-lucide="zap" color="var(--gold)" size="20"></i><br>
                        <span>Temps de réponse réduit de 40%</span>
                    </div>
                    <div class="key-point">
                        <i data-lucide="database" color="var(--gold)" size="20"></i><br>
                        <span>Base de données normalisée (3NF)</span>
                    </div>
                    <div class="key-point">
                        <i data-lucide="shield-check" color="var(--gold)" size="20"></i><br>
                        <span>Authentification robuste (Bcrypt)</span>
                    </div>
                </aside>

            </div>

        </main>

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

    <script>
        lucide.createIcons();
    </script>
</body>

</html>