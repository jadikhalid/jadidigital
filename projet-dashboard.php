<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Inventaire | JADI DIGITAL</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body style="background-color: var(--light-bg);">

    <nav>
        <a href="index.php" class="logo">JADI<span> DIGITAL</span></a>
        <a href="index.php" class="btn" style="padding: 10px 20px; display: flex; align-items: center; gap: 8px;">
            <i data-lucide="arrow-left" size="18"></i> Retour
        </a>
    </nav>

    <main class="project-detail-container">

        <header class="project-detail-header">
            <span class="section-tag">Analyse de Données</span>
            <h1>Dashboard d'Inventaire Temps Réel</h1>
            <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                <span class="tech-tag">MongoDB</span>
                <span class="tech-tag">Express.js</span>
                <span class="tech-tag">React</span>
                <span class="tech-tag">Node.js</span>
            </div>
        </header>

        <div class="project-main-grid">

            <div class="project-content">
                <h3 style="color: var(--gold); margin-bottom: 15px;">
                    Objectif du Projet
                </h3>
                <p style="margin-bottom: 25px; color: var(--text);">
                    Développement d'une interface de pilotage pour entrepôts logistiques. Le système permet de visualiser l'état des stocks critiques et d'anticiper les ruptures grâce à des graphiques dynamiques.
                </p>

                <h3 style="color: var(--gold); margin-bottom: 15px;">
                    Expertise Technique
                </h3>
                <ul class="project-features" style="border-top: none; padding-top: 0;">
                    <li style="margin-bottom: 10px;"><strong>Temps Réel :</strong> Synchronisation instantanée entre la base de données et l'interface utilisateur.</li>
                    <li style="margin-bottom: 10px;"><strong>Visualisation :</strong> Intégration de bibliothèques de graphiques pour le reporting.</li>
                    <li style="margin-bottom: 10px;"><strong>Sécurité :</strong> Accès restreint par authentification JWT (Tokens).</li>
                </ul>
            </div>

            <aside class="project-sidebar">
                <h4>Indicateurs Clés</h4>
                <div style="display: flex; flex-direction: column; gap: 15px;">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <i data-lucide="bar-chart" color="var(--gold)"></i>
                        <span>Analyse prédictive</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <i data-lucide="smartphone" color="var(--gold)"></i>
                        <span>Consultable sur mobile</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <i data-lucide="zap" color="var(--gold)"></i>
                        <span>Performance optimisée</span>
                    </div>
                </div>
            </aside>

        </div>


    </main>

    <script>
        lucide.createIcons();
    </script>
</body>

</html>