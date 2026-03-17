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
                <h1><?= __('project2_title') ?></h1>
                <div class="tech-stack">
                    <span class="tech-tag">Agile</span>
                    <span class="tech-tag">Users stories</span>
                    <span class="tech-tag">Fintech</span>
                    <span class="tech-tag">Visa</span>
                </div>
            </header>

            <div class="grid" style="display: grid; grid-template-columns: 2fr 1fr; gap: 50px;">
                <div class="content">
                    <section style="margin-bottom: 40px;">
                        <h2 style="color: var(--gold); margin-bottom: 20px;">
                            <i data-lucide="target" size="24" style="vertical-align: middle; margin-right: 10px;"></i>
                            <?= __('project1-page-header1') ?>
                        </h2>
                        <p style="line-height: 1.8; font-size: 1.1rem; opacity: 0.9;">
                            <?= __('project2_page_desc1') ?>
                        </p>
                    </section>

                    <section>
                        <h2 style="color: var(--gold); margin-bottom: 20px;">
                            <i data-lucide="settings" size="24" style="vertical-align: middle; margin-right: 10px;"></i>
                            <?= __('project1-page-header2') ?>
                        </h2>
                        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                            <tr style="border-bottom: 1px solid rgba(0,0,0,0.1);">
                                <td style="padding: 15px 0; font-weight: 600; color: var(--primary); width: 250px;">
                                    <?= __('project2_page_feature1_title') ?>
                                </td>
                                <td style="padding: 15px 0; opacity: 0.8;">
                                    <?= __('project2_page_feature1_desc') ?>
                                </td>
                            </tr>
                            <tr style="border-bottom: 1px solid rgba(0,0,0,0.1);">
                                <td style="padding: 15px 0; font-weight: 600; color: var(--primary);">
                                    <?= __('project2_page_feature2_title') ?>
                                </td>
                                <td style="padding: 15px 0; opacity: 0.8;">
                                    <?= __('project2_page_feature2_desc') ?>
                                </td>
                            </tr>
                            <tr style="border-bottom: 1px solid rgba(0,0,0,0.1);">
                                <td style="padding: 15px 0; font-weight: 600; color: var(--primary);">
                                    <?= __('project2_page_feature3_title') ?>
                                </td>
                                <td style="padding: 15px 0; opacity: 0.8;">
                                    <?= __('project2_page_feature3_desc') ?>
                                </td>
                            </tr>
                        </table>
                    </section>
                </div>

                <aside>
                    <div class="card" style="position: sticky; top: 120px; background: var(--primary); color: white; padding: 30px;">
                        <h3 style="color: var(--gold); margin-bottom: 20px;"><?= __('project1_page_aside_title') ?? 'Highlights' ?></h3>
                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 20px; display: flex; align-items: flex-start; gap: 10px;">
                                <i data-lucide="check-circle-2" color="var(--gold)" size="20"></i>
                                <span><?= __('project2_page_aside_text1') ?></span>
                            </li>
                            <li style="margin-bottom: 20px; display: flex; align-items: flex-start; gap: 10px;">
                                <i data-lucide="check-circle-2" color="var(--gold)" size="20"></i>
                                <span><?= __('project2_page_aside_text2') ?></span>
                            </li>
                            <li style="margin-bottom: 20px; display: flex; align-items: flex-start; gap: 10px;">
                                <i data-lucide="check-circle-2" color="var(--gold)" size="20"></i>
                                <span><?= __('project2_page_aside_text3') ?></span>
                            </li>
                        </ul>
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