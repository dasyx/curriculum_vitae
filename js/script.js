// Ecoute de l'événement passage de souris pour afficher l'overlay sur les images du portfolio

let overlay = document.getElementById('test');
let figcap = document.getElementById('text');

overlay.addEventListener('mouseover', function () {
    figcap.textContent = "text de test"
})
overlay.addEventListener('mouseout', function () {
    figcap.textContent = ""
})