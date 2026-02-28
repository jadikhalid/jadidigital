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
