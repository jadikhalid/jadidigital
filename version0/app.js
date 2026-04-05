/*
 * PORTFOLIO
 */
const modal = document.getElementById("portfolioModal");

function openPortfolio() {
  console.log("Ouverture du portfolio");
  // Force l'affichage du bloc
  modal.style.display = "flex";
  // Petit délai pour déclencher l'animation de transition
  setTimeout(() => {
    modal.classList.add("active");
  }, 10);
  // document.body.style.overflow = "hidden"; // Empêche le scroll derrière
}

function closePortfolio() {
  modal.classList.remove("active");
  // On attend 400ms (durée de la transition) avant de repasser en display none
  setTimeout(() => {
    modal.style.display = "none";
  }, 400);
  document.body.style.overflow = "auto";
}

// Fermeture au clic à l'extérieur du contenu blanc
window.onclick = function (event) {
  if (event.target === modal) {
    closePortfolio();
  }
};

/*
 * SLIDER
 */
const track = document.querySelector(".slider-track");
const dots = document.querySelectorAll(".dot");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");

function updateSliderControls() {
  const scrollLeft = track.scrollLeft;
  const maxScroll = track.scrollWidth - track.clientWidth;
  const index = Math.round(scrollLeft / track.clientWidth);

  // Mise à jour des points (dots)
  dots.forEach((dot, i) => {
    dot.classList.toggle("active", i === index);
  });

  // Désactivation/Masquage des flèches
  // On utilise un seuil de 5px pour éviter les erreurs d'arrondi
  prevBtn.disabled = scrollLeft <= 5;
  nextBtn.disabled = scrollLeft >= maxScroll - 5;
}

if (track && prevBtn && nextBtn) {
  // Clic sur bouton Suivant
  nextBtn.addEventListener("click", () => {
    track.scrollBy({ left: track.clientWidth, behavior: "smooth" });
  });

  // Clic sur bouton Précédent
  prevBtn.addEventListener("click", () => {
    track.scrollBy({ left: -track.clientWidth, behavior: "smooth" });
  });

  // Écouter le scroll pour mettre à jour les boutons en temps réel
  track.addEventListener("scroll", updateSliderControls);

  // Initialisation au chargement
  window.addEventListener("load", updateSliderControls);
}
