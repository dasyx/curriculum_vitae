
// Ecoute de l'événement passage de souris pour afficher l'overlay sur les images du portfolio

let overlay = document.getElementById('mouse_out');
let displayTop = document.getElementsByClassName('overlay_top');
let displayBottom = document.getElementsByClassName('overlay_bottom');
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

  for (i = 0; i < displayBottom.length; i++) {
    displayBottom[i].style.width = "420px";
    displayBottom[i].style.height = "200px";
  }
  for (i = 0; i < displayTop.length; i++) {
    displayTop[i].style.width = "420px";
    displayTop[i].style.height = "200px";
  }
})

overlay.addEventListener('mouseout', function () {
  figcap.textContent = "";
  figcap2.textContent = "";
  figcap_text.textContent = "";
  figcap_text.textContent = "";

  for (i = 0; i < displayBottom.length; i++) {
    displayBottom[i].style.width = "0px";
    displayBottom[i].style.height = "0px";
  }
  for (i = 0; i < displayTop.length; i++) {
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