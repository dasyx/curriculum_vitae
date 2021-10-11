// Ecoute de l'événement passage de souris pour afficher l'overlay sur les images du portfolio

let overlay = document.getElementById('test');
let figcap = document.getElementById('text');
let figcap2 = document.getElementById('text2');
let displayIcon = document.getElementById('display_icon');

overlay.addEventListener('mouseover', function () {
    figcap.textContent = "text de test";
    figcap2.textContent = "text de test2";
})
overlay.addEventListener('mouseout', function () {
    figcap.textContent = ""
    figcap2.textContent = ""
})