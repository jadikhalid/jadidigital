document.addEventListener("DOMContentLoaded", () => {
  // ── GESTION DE LA FAQ ──
  const faqQuestions = document.querySelectorAll(".faq-q");

  faqQuestions.forEach((question) => {
    question.addEventListener("click", () => {
      const answer = question.nextElementSibling;
      const icon = question.querySelector(".faq-icon");
      const isOpen = answer.classList.contains("open");

      // Fermer toutes les autres réponses
      document.querySelectorAll(".faq-a.open").forEach((openAnswer) => {
        openAnswer.classList.remove("open");
        const associatedIcon =
          openAnswer.previousElementSibling.querySelector(".faq-icon");
        if (associatedIcon) associatedIcon.textContent = "+";
      });

      // Ouvrir/Fermer l'élément actuel
      if (!isOpen) {
        answer.classList.add("open");
        icon.textContent = "−";
      } else {
        answer.classList.remove("open");
        icon.textContent = "+";
      }
    });
  });

  // ── GESTION DES SCROLLS (NAVIGATION) ──

  const scrollToId = (id) => {
    const element = document.getElementById(id);
    if (element) {
      element.scrollIntoView({ behavior: "smooth" });
    }
  };

  // Boutons "Contact"
  document
    .querySelectorAll(".btn-scroll-contact, #cta-nav, #cta-hero-start")
    .forEach((btn) => {
      btn.addEventListener("click", () => scrollToId("contact"));
    });

  // Boutons "Réalisations"
  document
    .querySelectorAll(".btn-scroll-portfolio, #cta-hero-portfolio")
    .forEach((btn) => {
      btn.addEventListener("click", () => scrollToId("realisations"));
    });
});

// gstion du menu de la section nav
const navToggle = document.getElementById("nav-toggle");
const navMenu = document.getElementById("nav-menu");
const navLinks = document.querySelectorAll(".nav-links a");

// Toggle du menu
navToggle.addEventListener("click", () => {
  navToggle.classList.toggle("active");
  navMenu.classList.toggle("active");
  // Empêcher le scroll quand le menu est ouvert
  document.body.classList.toggle("no-scroll");
});

// Fermer le menu quand on clique sur un lien (utile pour les ancres)
navLinks.forEach((link) => {
  link.addEventListener("click", () => {
    navToggle.classList.remove("active");
    navMenu.classList.remove("active");
  });
});
