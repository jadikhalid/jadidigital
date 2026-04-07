document.addEventListener("DOMContentLoaded", function () {
  // 1. Initialisation des icônes Lucide
  if (typeof lucide !== "undefined") {
    lucide.createIcons();
  }

  // 2. Gestion du formulaire de contact
  const contactForm = document.getElementById("contact-form");
  if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
      e.preventDefault();
      const form = this;
      const submitBtn = form.querySelector(".form-submit");
      const originalBtnText = submitBtn.innerText;

      submitBtn.disabled = true;
      submitBtn.innerText = "Envoi en cours...";

      fetch(form.action, {
        method: "POST",
        body: new FormData(form),
      })
        .then((response) => response.json())
        .then((data) => {
          const isSuccess = data.status === "success";
          showStatusPopup(
            isSuccess
              ? "✅ Message envoyé avec succès !"
              : "❌ Erreur lors de l'envoi du message.",
            isSuccess,
          );
          if (isSuccess) form.reset();
        })
        .catch(() => {
          showStatusPopup("❌ Erreur réseau. Veuillez réessayer.", false);
        })
        .finally(() => {
          submitBtn.disabled = false;
          submitBtn.innerText = originalBtnText;
        });
    });
  }
});

/**
 * Affiche un popup de statut temporaire
 */
function showStatusPopup(message, isSuccess) {
  const alertDiv = document.createElement("div");
  alertDiv.style.cssText = `
        position: fixed; top: 80px; right: 20px; z-index: 1000; 
        padding: 15px 25px; border-radius: 8px; color: white; 
        background-color: ${isSuccess ? "#10b981" : "#ef4444"}; 
        box-shadow: 0 4px 12px rgba(0,0,0,0.1); font-family: sans-serif;
    `;
  alertDiv.innerText = message;
  document.body.appendChild(alertDiv);

  setTimeout(() => alertDiv.remove(), 5000);
}
