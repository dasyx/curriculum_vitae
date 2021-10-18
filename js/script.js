// Ecoute de l'événement passage de souris pour afficher l'overlay sur les images du portfolio

let overlay = document.getElementById('mouse_out');
let displayTop = document.getElementsByClassName('overlay_top');
let displayBottom = document.getElementsByClassName('overlay_bottom');
let figcap_top_sec = document.getElementsByClassName('text_top_second');
let figcap_bottom = document.getElementsByClassName('text_bottom');
let figcap_top = document.getElementsByClassName('text_top');
let figcap_icon2 = document.getElementsByClassName('text_icon2');
let arrow = document.getElementsByClassName('bi');
let icon_display = document.getElementsByClassName('icon_display');
let icon = document.createElement('i');

overlay.addEventListener('mouseover', function () {

  for (i = 0; i < displayBottom.length && displayTop.length; i++) {
    displayBottom[i].style.width = "420px";
    displayBottom[i].style.height = "200px";
    displayTop[i].style.width = "420px";
    displayTop[i].style.height = "200px";
  }
  for (i = 0; i < figcap_top_sec.length; i++) {
    figcap_top_sec[i].style.display = "inline";
    figcap_top_sec[i].textContent = "text de test";
  }
  for (i = 0; i < figcap_bottom.length; i++) {
    figcap_bottom[i].style.display = "inline";
    figcap_bottom[i].textContent = "text de test2";
  }
  for (i = 0; i < figcap_top.length && figcap_icon2.length; i++) {
    figcap_top[i].style.display = "inline";
    figcap_icon2[i].style.display = "inline";
  }
  for (i = 0; i < icon_display.length; i++) {
    icon.setAttribute("class", "bi bi-arrow-right-circle");
    icon_display[i].appendChild(icon);
    for (i = 0; i < arrow.length; i++) {
      arrow[i].style.display = "block";
      arrow[i].style.textAlign = "center";
    }
  }
  /* if (figcap[0]) {
    figcap[0].innerHTML = "ohmyfood";
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