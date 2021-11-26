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
let low_res_site = document.getElementsByClassName('lw_res_site')
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
  }
  for (i = 0; i < figcap_top.length && figcap_top_sec.length; i++) {
    figcap_top[i].style.display = "flex";
    figcap_top_sec[i].style.display = "flex";
  }
  for (i = 0; i < figcap_bottom.length; i++) {
    figcap_bottom[i].textContent = "Voir le code";
  }
  for (i = 0; i < figcap_tech1.length && figcap_tech2.length && figcap_tech3.length; i++) {
    figcap_tech1[i].style.margin = "10px";
    figcap_tech2[i].style.margin = "10px";
    figcap_tech3[i].style.margin = "10px";

  }
  // Affichage conditionnel spécifique du contenu portofilio pour chaque projet
  if (figcap_top[0]) {
    figcap_top[0].innerHTML = "Dynamiser une page web" + "<br>" + "avec" + "<br>" + "des animations CSS";
    figcap_tech1[0].innerHTML = "HTML";
    figcap_tech2[0].innerHTML = "CSS";
    figcap_tech3[0].innerHTML = "SASS";
    //figcap_tech1[0].style.backgroundColor = "yellow";
  }
  if (figcap_top[1]) {
    figcap_top[1].innerHTML = "Optimiser un site web existant";
    figcap_tech1[1].innerHTML = "HTML";
    figcap_tech2[1].innerHTML = "BOOTSTRAP";
    figcap_tech3[1].innerHTML = "SEO";
  }
  if (figcap_top[2]) {
    figcap_top[2].innerHTML = "Construire un site e-commerce";
    figcap_top_sec[2].style.display = "none";
    figcap_tech1[2].innerHTML = "HTML";
    figcap_tech2[2].innerHTML = "CSS";
    figcap_tech3[2].innerHTML = "JAVASCRIPT";
  }
  if (figcap_top[3]) {
    figcap_top[3].innerHTML = "Construire une API sécurisée pour une application d'avis gastronomiques";
    figcap_top_sec[3].style.display = "none";
    figcap_tech1[3].innerHTML = "HTML";
    figcap_tech2[3].innerHTML = "CSS";
    figcap_tech3[3].innerHTML = "NODEJS";
  }
  if (figcap_top[4]) {
    figcap_top[4].innerHTML = "Créer un réseau social d'entrprise";
    figcap_top_sec[4].style.display = "none";
    figcap_tech1[4].innerHTML = "JAVASCRIPT";
    figcap_tech2[4].innerHTML = "VUEJS";
    figcap_tech3[4].innerHTML = "NODEJS";
  }
  if (figcap_top[5]) {
    figcap_top[5].innerHTML = "Transformer une maquette en site web";
    figcap_tech1[5].innerHTML = "HTML";
    figcap_tech3[5].innerHTML = "CSS";
  }
})

// Fin de l'animation hover des éléments du portfolio
overlay.addEventListener('mouseout', function () {

  for (i = 0; i < displayBottom.length && displayTop; i++) {
    displayBottom[i].style.width = "0px";
    displayBottom[i].style.height = "0px";
    displayTop[i].style.width = "0px";
    displayTop[i].style.height = "0px";
  }
})

// Gestion de l'affichage basse ou haute résolution des images du portfolio
let lowResPortfolio = document.getElementsByClassName('low-res_display');
var lowResDisplay = window.matchMedia("(max-width: 767px)")

function portfolioDisplay() {
  if (lowResDisplay.matches) {
    for (i = 0; i < lowResPortfolio.length; i++) {
      lowResPortfolio[i].style.display = "flex";
    }
    for (i = 0; i < displayBottom.length && displayTop.length; i++) {
      displayBottom[i].style.display = "none";
      displayTop[i].style.display = "none";
    }
  } else if (!lowResDisplay.matches) {
    for (i = 0; i < lowResPortfolio.length; i++) {
      lowResPortfolio[i].style.display = "none";
    }
  }
}
portfolioDisplay();

// Gestion de l'affichage des sites du portfolio qui nécessite un hébergement 
// (et qui ne s'afficheront pas correctement sans un passage en production)
function displaySite() {
  if (low_res_site[2] || low_res_site[3] || low_res_site[4]) {
    low_res_site[2].style.display = "none";
    low_res_site[3].style.display = "none";
    low_res_site[4].style.display = "none";
  }
}
displaySite();

// Script contrôlant l'effet goutte d'eau sur les éléments nav du header
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
var scrollToTopBtn = document.querySelector(".scrollToTopBtn");
var rootElement = document.documentElement;

function handleScroll() {
  // Do something on scroll
  var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight;
  if (rootElement.scrollTop / scrollTotal > 0.8) {
    // Show button
    scrollToTopBtn.classList.add("showBtn");
  } else {
    // Hide button
    scrollToTopBtn.classList.remove("showBtn");
  }
}

function scrollToTop() {
  // Scroll to top logic
  rootElement.scrollTo({
    top: 0,
    behavior: "smooth"
  });
}
scrollToTopBtn.addEventListener("click", scrollToTop);
document.addEventListener("scroll", handleScroll);


// Script animant l'affichage du formulaire de contact

var contact = document.getElementById("contactDisplay");

function displayContact() {
    contact.style.display = "block";
    window.scrollBy(0,800);
}