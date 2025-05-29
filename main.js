
const catalogoEl = document.getElementById("catalogo");

function renderCatalog(categoria) {
  catalogoEl.innerHTML = "";
  catalogo
    .filter(item => categoria === "Todos" || item.categoria === categoria)
    .forEach(item => {
      const card = document.createElement("div");
      card.className = "card";
      card.innerHTML = `<img src="${item.capa}" alt=""><p>${item.titulo}</p>`;
      card.onclick = () => openPlayer(item.link);
      catalogoEl.appendChild(card);
    });
}

function filterCategory(categoria) {
  renderCatalog(categoria);
}

function openPlayer(link) {
  document.getElementById("videoPlayer").src = link;
  document.getElementById("playerModal").style.display = "block";
}

function closePlayer() {
  document.getElementById("videoPlayer").src = "";
  document.getElementById("playerModal").style.display = "none";
}

renderCatalog("Todos");
