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
    <title>Contact | JADI DIGITAL</title>
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <?php if ($is_morocco): ?>
        <div style="background-color: #000000; width: 100vw; height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center; color: white; text-align: center; padding: 20px;">
            <h1>Bienvenue ...</h1>
        </div>
    <?php else: ?>
        <?php if (isset($_GET['status'])): ?>
            <div id="status-popup" class="popup-<?= $_GET['status'] ?>">
                <div class="popup-content">
                    <i data-lucide="<?= $_GET['status'] === 'success' ? 'check-circle' : 'alert-circle' ?>"></i>
                    <span>
                        <?= $_GET['status'] === 'success'
                            ? 'Message envoyé avec succès !'
                            : 'Erreur lors de l\'envoi. Réessayez.' ?>
                    </span>
                    <button onclick="closePopup()" class="close-popup">&times;</button>
                </div>
            </div>
        <?php endif; ?>

        <nav>
            <a href="index.php?lang=<?= $_GET['lang'] ?? 'fr' ?>" class="logo">JADI<span> DIGITAL</span></a>

            <div class=" nav-right">
                <div class="lang-switcher">
                    <a href="?lang=fr"><img src="https://flagicons.lipis.dev/flags/4x3/fr.svg" alt="FR" width="24" height="18"></a>
                    <a href="?lang=en"><img src="https://flagicons.lipis.dev/flags/4x3/gb.svg" alt="EN" width="24" height="18"></a>
                </div>
                <a href="index.php?lang=<?= $_GET['lang'] ?? 'fr' ?>" class="btn"><?= __('contact_retour') ?></a>
            </div>
        </nav>

        <section style="padding: 60px 8%; text-align: center;">
            <span class="section-tag"><?= __('contact_mini_title') ?></span>
            <h1 style="color: var(--primary); font-size: 2.5rem;"><?= __('contact_title') ?></h1>
        </section>

        <div class="contact-container">
            <form action="sendEmail.php" method="POST">
                <div class="form-group">
                    <label for="name"><?= __('contact_nom') ?></label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject"><?= __('contact_objet') ?></label>
                    <input type="text" id="subject" name="subject">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-submit"><?= __('contact_sendButton') ?></button>
            </form>
        </div>

        <!-- <footer>
      <div style="font-size: 0.8rem; opacity: 0.4">
        &copy; 2026 JADI DIGITAL | Casablanca | Paris | New York
      </div>
    </footer> -->
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
    <script>
        function closePopup() {
            const popup = document.getElementById('status-popup');
            if (popup) {
                popup.style.animation = 'fadeOut 0.5s ease forwards';
                setTimeout(() => popup.remove(), 500);
            }
        }

        // Auto-fermeture après 5 secondes
        if (document.getElementById('status-popup')) {
            setTimeout(closePopup, 5000);
        }
    </script>
</body>

</html>