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

            <div class="project-main-grid">

                <div class="content">
                    <section class="project-content">
                        <h3 style="color: var(--gold); margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                            <i data-lucide="target" size="20"></i> <?= __('project1-page-header1') ?>
                        </h3>
                        <p style="margin-bottom: 25px;">
                            <?= __('project2_page_desc1') ?>
                        </p>
                    </section>

                    <h3 style="color: var(--gold); margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                        <i data-lucide="cpu" size="20"></i> <?= __('project1-page-header2') ?>
                    </h3>
                    <ul class="project-features">
                        <li><strong><?= __('project2_page_feature1_title') ?></strong> <span><?= __('project2_page_feature1_desc') ?></span></li>
                        <li><strong><?= __('project2_page_feature2_title') ?></strong> <span><?= __('project2_page_feature2_desc') ?></span></li>
                        <li><strong><?= __('project2_page_feature3_title') ?></strong> <span><?= __('project2_page_feature3_desc') ?>.</span></li>
                    </ul>
                </div>

                <aside class="project-sidebar">
                    <h4>Impact & Metrics</h4>
                    <div class="key-point">
                        <i data-lucide="check-circle-2" color="var(--gold)" size="20"></i><br>
                        <span><?= __('project2_page_aside_text1') ?></span>
                    </div>
                    <div class="key-point">
                        <i data-lucide="check-circle-2" color="var(--gold)" size="20"></i><br>
                        <span><?= __('project2_page_aside_text2') ?></span>
                    </div>
                    <div class="key-point">
                        <i data-lucide="check-circle-2" color="var(--gold)" size="20"></i><br>
                        <span><?= __('project2_page_aside_text3') ?></span>
                    </div>
                </aside>

            </div>

            <section class="methodology-container" style="margin-top: 60px; padding: 20px; background: #fff; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                <h2 style="color: var(--primary); text-align: center; margin-bottom: 10px;">
                    <i data-lucide="layers" style="vertical-align: middle; margin-right: 10px; color: var(--gold);"></i>
                    Méthodologie Product Owner
                </h2>
                <p style="text-align: center; opacity: 0.7; max-width: 800px; margin: 0 auto 50px;">
                    Décomposition des étapes clés et livrables produits pour garantir le succès et la conformité PCI-DSS du projet Visa.
                </p>

                <div class="custom-timeline" style="position: relative; max-width: 900px; margin: 0 auto; padding-left: 30px; border-left: 2px solid rgba(212, 175, 55, 0.2);">

                    <div class="step-item" style="position: relative; margin-bottom: 40px;">
                        <div style="position: absolute; width: 14px; height: 14px; background: var(--gold); border-radius: 50%; left: -38px; top: 5px; border: 3px solid #fff; box-shadow: 0 0 0 1px rgba(0,0,0,0.1);"></div>
                        <span style="font-weight: bold; color: var(--gold); text-transform: uppercase; font-size: 0.8rem;">Étape 1 : Cadrage et Immersion (Discovery)</span>
                        <h4 style="margin: 5px 0; color: var(--primary);">Validation de la viabilité et conformité</h4>
                        <p style="font-size: 0.95rem; margin-bottom: 15px;">Analyse des offres Visa (Revolut, Wise) et impact PCI-DSS sur la gestion des PAN/CVV.</p>
                        <div style="background: var(--light-bg); padding: 15px; border-radius: 8px; border-left: 3px solid var(--gold); font-size: 0.85rem;">
                            <strong>Extrait : Benchmark & Faisabilité</strong><br>
                            <span style="font-style: italic; opacity: 0.8;">"Note de cadrage sur les protocoles 3D Secure et plafonds de paiement conformes aux exigences de la Banque Centrale."</span>
                        </div>
                    </div>

                    <div class="step-item" style="position: relative; margin-bottom: 40px;">
                        <div style="position: absolute; width: 14px; height: 14px; background: var(--gold); border-radius: 50%; left: -38px; top: 5px; border: 3px solid #fff; box-shadow: 0 0 0 1px rgba(0,0,0,0.1);"></div>
                        <span style="font-weight: bold; color: var(--gold); text-transform: uppercase; font-size: 0.8rem;">Étape 2 : Ateliers de Recensement (Inception)</span>
                        <h4 style="margin: 5px 0; color: var(--primary);">Définition du périmètre MVP avec les parties prenantes</h4>
                        <p style="font-size: 0.95rem; margin-bottom: 15px;">Échanges avec les métiers, l'IT et la sécurité pour aligner les besoins et contraintes.</p>
                        <div style="background: var(--light-bg); padding: 15px; border-radius: 8px; border-left: 3px solid var(--gold); font-size: 0.85rem;">
                            <strong>Extrait : User Journey Map</strong><br>
                            <span style="font-style: italic; opacity: 0.8;">"Parcours : Du clic 'Créer ma carte' à l'affichage sécurisé après authentification forte MFA."</span>
                        </div>
                    </div>

                    <div class="step-item" style="position: relative; margin-bottom: 40px;">
                        <div style="position: absolute; width: 14px; height: 14px; background: var(--gold); border-radius: 50%; left: -38px; top: 5px; border: 3px solid #fff; box-shadow: 0 0 0 1px rgba(0,0,0,0.1);"></div>
                        <span style="font-weight: bold; color: var(--gold); text-transform: uppercase; font-size: 0.8rem;">Étape 3 : Spécifications et Priorisation</span>
                        <h4 style="margin: 5px 0; color: var(--primary);">Transformation de la vision en User Stories actionnables</h4>
                        <p style="font-size: 0.95rem; margin-bottom: 15px;">Rédaction détaillée des US avec critères d'acceptation et planification de la roadmap.</p>
                        <div style="background: var(--light-bg); padding: 15px; border-radius: 8px; border-left: 3px solid var(--gold); font-size: 0.85rem;">
                            <strong>Extrait : Backlog & Roadmap</strong><br>
                            <span style="font-style: italic; opacity: 0.8;">"US : 'En tant qu'utilisateur, je veux copier mon numéro de carte en un clic'. Roadmap Q1 : Lancement Visa Domestique."</span>
                        </div>
                    </div>

                    <div class="step-item" style="position: relative; margin-bottom: 40px;">
                        <div style="position: absolute; width: 14px; height: 14px; background: var(--gold); border-radius: 50%; left: -38px; top: 5px; border: 3px solid #fff; box-shadow: 0 0 0 1px rgba(0,0,0,0.1);"></div>
                        <span style="font-weight: bold; color: var(--gold); text-transform: uppercase; font-size: 0.8rem;">Étape 4 : Suivi du Développement (Agile)</span>
                        <h4 style="margin: 5px 0; color: var(--primary);">Coordination de la squad et rituels Scrum</h4>
                        <p style="font-size: 0.95rem; margin-bottom: 15px;">Gestion quotidienne du backlog et animation des cérémonies pour garantir la vélocité.</p>
                        <div style="background: var(--light-bg); padding: 15px; border-radius: 8px; border-left: 3px solid var(--gold); font-size: 0.85rem;">
                            <strong>Extrait : Sprint Review (Jira)</strong><br>
                            <span style="font-style: italic; opacity: 0.8;">"Démo du module d'autorisation validée par la Direction Conformité. Suivi du Burn-down chart."</span>
                        </div>
                    </div>

                    <div class="step-item" style="position: relative; margin-bottom: 40px;">
                        <div style="position: absolute; width: 14px; height: 14px; background: var(--gold); border-radius: 50%; left: -38px; top: 5px; border: 3px solid #fff; box-shadow: 0 0 0 1px rgba(0,0,0,0.1);"></div>
                        <span style="font-weight: bold; color: var(--gold); text-transform: uppercase; font-size: 0.8rem;">Étape 5 : Recette et Lancement (UAT)</span>
                        <h4 style="margin: 5px 0; color: var(--primary);">Validation finale de bout en bout (Go/No-Go)</h4>
                        <p style="font-size: 0.95rem; margin-bottom: 15px;">Tests utilisateurs réels et accompagnement des équipes support pour le déploiement.</p>
                        <div style="background: var(--light-bg); padding: 15px; border-radius: 8px; border-left: 3px solid var(--gold); font-size: 0.85rem;">
                            <strong>Extrait : Cahier de Recette</strong><br>
                            <span style="font-style: italic; opacity: 0.8;">"Scénario : Paiement 3D Secure réussi sur site marchand. Guide de formation support client finalisé."</span>
                        </div>
                    </div>

                    <div class="step-item" style="position: relative; margin-bottom: 0;">
                        <div style="position: absolute; width: 14px; height: 14px; background: var(--gold); border-radius: 50%; left: -38px; top: 5px; border: 3px solid #fff; box-shadow: 0 0 0 1px rgba(0,0,0,0.1);"></div>
                        <span style="font-weight: bold; color: var(--gold); text-transform: uppercase; font-size: 0.8rem;">Étape 6 : Pilotage Post-Lancement</span>
                        <h4 style="margin: 5px 0; color: var(--primary);">Suivi de performance (KPI) et Growth</h4>
                        <p style="font-size: 0.95rem; margin-bottom: 15px;">Analyse des données d'usage pour identifier les axes d'amélioration continue.</p>
                        <div style="background: var(--light-bg); padding: 15px; border-radius: 8px; border-left: 3px solid var(--gold); font-size: 0.85rem;">
                            <strong>Extrait : Dashboard KPI (GA4)</strong><br>
                            <span style="font-style: italic; opacity: 0.8;">"Taux de succès transactions : 97% ; +5 000 cartes activées en première semaine."</span>
                        </div>
                    </div>

                </div>
            </section>




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