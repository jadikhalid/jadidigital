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

    <nav>
        <a href="index.php" class="logo">JADI<span> DIGITAL</span></a>
        <a href="index.php" class="btn" style="padding: 8px 15px; font-size: 0.9rem; display: flex; align-items: center; gap: 5px;">
            <i data-lucide="arrow-left" size="16"></i> Retour
        </a>
    </nav>

    <main class="project-detail-container">

        <header class="project-detail-header">
            <span class="section-tag">Étude de Cas</span>
            <h1>SaaS Helpdesk & Ticketing</h1>
            <div class="tech-stack">
                <span class="tech-tag">PHP 8.2</span>
                <span class="tech-tag">MySQL</span>
                <span class="tech-tag">Architecture MVC</span>
                <span class="tech-tag">PHPMailer</span>
            </div>
        </header>

        <div class="project-main-grid">

            <div class="project-content">
                <h3 style="color: var(--gold); margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                    <i data-lucide="target" size="20"></i> Le Besoin
                </h3>
                <p style="margin-bottom: 25px;">
                    Conception d'une plateforme centralisée pour la gestion des réclamations clients, remplaçant les flux d'emails désorganisés par un système de tickets structuré et auditable.
                </p>

                <h3 style="color: var(--gold); margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                    <i data-lucide="cpu" size="20"></i> Solutions Techniques
                </h3>
                <ul class="project-features" style="border: none; padding: 0;">
                    <li><strong>Moteur de Priorisation :</strong> Algorithme calculant l'urgence selon le type de contrat (SLA).</li>
                    <li><strong>Sécurité :</strong> Protection contre les injections SQL et failles XSS (Clean Code).</li>
                    <li><strong>Notifications :</strong> Système SMTP automatisé pour un suivi en temps réel.</li>
                </ul>
            </div>

            <aside class="project-sidebar">
                <h4>Impact & Metrics</h4>
                <div class="key-point">
                    <i data-lucide="zap" color="var(--gold)" size="20"></i>
                    <span>Temps de réponse réduit de 40%</span>
                </div>
                <div class="key-point">
                    <i data-lucide="database" color="var(--gold)" size="20"></i>
                    <span>Base de données normalisée (3NF)</span>
                </div>
                <div class="key-point">
                    <i data-lucide="shield-check" color="var(--gold)" size="20"></i>
                    <span>Authentification robuste (Bcrypt)</span>
                </div>
            </aside>

        </div>

    </main>

    <script>
        lucide.createIcons();
    </script>
</body>

</html>