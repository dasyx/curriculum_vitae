// Ecoute de l'événement passage de souris pour afficher l'overlay sur les images du portfolio

let overlay = document.getElementById('test');
//let display = document.getElementById('position');
let figcap = document.getElementById('text');
let figcap2 = document.getElementById('text2');
let figcap_text = document.getElementById('text_icon');
let figcap_text2 = document.getElementById('text_icon2');

overlay.addEventListener('mouseover', function () {
    figcap.textContent = "text de test";
    figcap2.textContent = "text de test2";
    figcap.style.display = "inline";
    figcap2.style.display = "inline";
    figcap_text.style.display = "inline";
    figcap_text2.style.display = "inline";
})
overlay.addEventListener('mouseout', function () {
    figcap.textContent = "";
    figcap2.textContent = "";
    figcap_text.textContent = "";
    figcap_text.textContent = "";
    figcap_text.style.display = "none";
    figcap_text2.style.display = "none";
})