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
      <a href="index.php" class="logo">JADI<span> DIGITAL</span></a>
      <a href="index.php" class="btn" style="padding: 10px 25px">Retour</a>
    </nav>

    <section style="padding: 60px 8%; text-align: center;">
        <span class="section-tag">Parlons de votre projet</span>
        <h1 style="color: var(--primary); font-size: 2.5rem;">Contactez-moi</h1>
    </section>

    <div class="contact-container">
        <form action="sendEmail.php" method="POST">
            <div class="form-group">
                <label for="name">Nom Complet</label>
                <input type="text" id="name" name="name" placeholder="Votre nom" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="votre@email.com" required>
            </div>
            <div class="form-group">
                <label for="subject">Objet</label>
                <input type="text" id="subject" name="subject" placeholder="Sujet de votre message">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" placeholder="Comment puis-je vous aider ?" required></textarea>
            </div>
            <button type="submit" class="btn btn-submit">Envoyer le message</button>
        </form>
    </div>

    <!-- <footer>
      <div style="font-size: 0.8rem; opacity: 0.4">
        &copy; 2026 JADI DIGITAL | Casablanca | Paris | New York
      </div>
    </footer> -->
     <footer>
      <a href="#" class="logo" style="color: white; font-size: 2rem"
        >JADI<span> DIGITAL</span></a
      >
      <p style="margin: 20px 0; opacity: 0.7">
        Expertise Tech & Conseil Stratégique.
      </p>
      <div style="margin-top: 40px; font-size: 0.8rem; opacity: 0.4">
        &copy; 2026 JADI DIGITAL | Casablanca | Paris | New York
      </div>
    </footer>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>lucide.createIcons();</script>
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