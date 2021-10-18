// Ecoute de l'événement passage de souris pour afficher l'overlay sur les images du portfolio

let overlay = document.getElementById('mouse_out');
let displayTop = document.getElementsByClassName('overlay_top');
let displayBottom = document.getElementsByClassName('overlay_bottom');
let figcap_top = document.getElementsByClassName('text_top');
let figcap_top_sec = document.getElementsByClassName('text_top_second');
let figcap_bottom = document.getElementsByClassName('text_bottom');
let figcap_icon2 = document.getElementsByClassName('text_icon2');
let figcap_tech1 = document.getElementsByClassName('text_techno1');
let figcap_tech2 = document.getElementsByClassName('text_techno2');
let figcap_tech3 = document.getElementsByClassName('text_techno3');
let figcap_top_icon = document.getElementsByClassName('bi');
let icon_top_display = document.getElementsByClassName('icon_top_display');
let icon_bottom_display = document.getElementsByClassName('icon_bottom_display');
let icon = document.createElement('i');

overlay.addEventListener('mouseover', function () {

  for (i = 0; i < displayBottom.length && displayTop.length; i++) {
    displayBottom[i].style.width = "420px";
    displayBottom[i].style.height = "200px";
    displayTop[i].style.width = "420px";
    displayTop[i].style.height = "200px";
  }
  for (i = 0; i < figcap_icon2.length && figcap_bottom.length; i++) {
    figcap_icon2[i].style.display = "inline";
    figcap_bottom[i].style.display = "inline";
  }
  for (i = 0; i < figcap_top_sec.length && figcap_top; i++) {
    figcap_top_sec[i].textContent = "Voir le site";
    figcap_top[i].style.textAlign = "center";
    figcap_top_sec[i].style.margi = "center";
  }
  for (i = 0; i < figcap_top.length && figcap_top_sec.length; i++) {
    figcap_top[i].style.display = "flex";
    figcap_top_sec[i].style.display = "flex";
  }
  for (i = 0; i < figcap_bottom.length; i++) {
    figcap_bottom[i].textContent = "Voir le code";
  }
  // Affichage conditionnel spécifique du contenu portofilio pour chaque projet
  if (figcap_top[0]) {
    figcap_top[0].innerHTML = "Dynamiser une page web avec des animations CSS";
    figcap_tech1[0].innerHTML = "HTML";
    figcap_tech1[0].style.margin = "10px";
    figcap_tech2[0].innerHTML = "CSS";
    figcap_tech2[0].style.margin = "10px";
    figcap_tech3[0].innerHTML = "SASS";
    figcap_tech3[0].style.margin = "10px";
  }
  if (figcap_top[1]) {
    figcap_top[1].innerHTML = "Optimiser un site web existant";
  }
  if (figcap_top[2]) {
    figcap_top[2].innerHTML = "Construire un site e-commerce";
  }
  if (figcap_top[3]) {
    figcap_top[3].innerHTML = "Construire une API sécurisée pour une application d'avis gastronomiques";
  }
  if (figcap_top[4]) {
    figcap_top[4].innerHTML = "Créer un réseau social d'entrprise";
  }
  if (figcap_top[5]) {
    figcap_top[5].innerHTML = "Transformer une maquette en site web";
  }
  /* for (i = 0; i < icon_display.length; i++) {
    icon.setAttribute("class", "bi bi-arrow-right-circle");
    icon_display[i].append(icon);
  } */
})

overlay.addEventListener('mouseout', function () {

  for (i = 0; i < displayBottom.length && displayTop; i++) {
    displayBottom[i].style.width = "0px";
    displayBottom[i].style.height = "0px";
    displayTop[i].style.width = "0px";
    displayTop[i].style.height = "0px";
  }
})

// script contrôlant l'effet goutte d'eau sur les éléments nav du header

window.onload = function () {
  let rippleElements = document.getElementsByClassName("myRipple");
  for (var i = 0; i < rippleElements.length; i++) {
    rippleElements[i].onclick = function (e) {
      let X = e.pageX - this.offsetLeft;
      let Y = e.pageY - this.offsetTop;
      let rippleDiv = document.createElement("div");
      rippleDiv.classList.add('ripple');
      rippleDiv.setAttribute("style", "top:" + Y + "px; left:" + X + "px;");
      let customColor = this.getAttribute('ripple-color');
      if (customColor) rippleDiv.style.background = customColor;
      this.appendChild(rippleDiv);
      setTimeout(function () {
        rippleDiv.parentElement.removeChild(rippleDiv);
      }, 900);
    }
  }
}