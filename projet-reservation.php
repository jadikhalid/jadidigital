<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Système de Réservation | JADI DIGITAL</title>
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
            <span class="section-tag">Ingénierie Logicielle</span>
            <h1>Réservation de Ressources Intelligente</h1>
            <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                <span class="tech-tag">POO (PHP)</span>
                <span class="tech-tag">SQL</span>
                <span class="tech-tag">Algorithmique</span>
                <span class="tech-tag">Clean Code</span>
            </div>
        </header>

        <div class="project-main-grid">

            <div class="project-content">
                <h3 style="color: var(--gold); margin-bottom: 15px;">
                    Défi Technique
                </h3>
                <p style="margin-bottom: 25px; color: var(--text);">
                    L'enjeu majeur était de concevoir un moteur capable de gérer des réservations simultanées pour des salles et équipements sans aucun risque de chevauchement (double réservation).
                </p>

                <h3 style="color: var(--gold); margin-bottom: 15px;">
                    Solutions Implémentées
                </h3>
                <ul class="project-features" style="border-top: none; padding-top: 0;">
                    <li style="margin-bottom: 10px;"><strong>Logique POO :</strong> Utilisation de classes et d'objets pour modéliser les ressources et les contraintes de temps.</li>
                    <li style="margin-bottom: 10px;"><strong>Validation Stricte :</strong> Algorithme de vérification de disponibilité avant chaque écriture en base de données.</li>
                    <li style="margin-bottom: 10px;"><strong>Interface Utilisateur :</strong> Calendrier intuitif facilitant la lecture des créneaux libres et occupés.</li>
                </ul>
            </div>

            <aside class="project-sidebar">
                <h4>Atouts du Système</h4>
                <div style="display: flex; flex-direction: column; gap: 15px;">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <i data-lucide="check-square" color="var(--gold)"></i>
                        <span>Zéro conflit de calendrier</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <i data-lucide="git-merge" color="var(--gold)"></i>
                        <span>Architecture évolutive</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <i data-lucide="clock" color="var(--gold)"></i>
                        <span>Calcul instantané</span>
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