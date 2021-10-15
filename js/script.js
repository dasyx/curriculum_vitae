// Ecoute de l'événement passage de souris pour afficher l'overlay sur les images du portfolio

let overlay = document.getElementById('test');
let displayTop = document.getElementById('overlay_top');
let displayBottom = document.getElementById('overlay_bottom');
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
    displayTop.style.width = "420px";
    displayBottom.style.width = "420px";
    displayTop.style.height = "200px";
    displayBottom.style.height = "200px";
})
overlay.addEventListener('mouseout', function () {
    figcap.textContent = "";
    figcap2.textContent = "";
    figcap_text.textContent = "";
    figcap_text.textContent = "";
    displayTop.style.width = "100px";
    displayBottom.style.width = "100px";
    displayTop.style.height = "0px";
    displayBottom.style.height = "0px";
})
// Gestion de l'effet ripple au passage sur les boutons

window.onload = function() {
    let rippleElements = document.getElementsByClassName("myRipple");
    for(var i = 0; i < rippleElements.length; i++) {
        rippleElements[i].onclick = function(e) {
          let X = e.pageX - this.offsetLeft;
          let Y = e.pageY - this.offsetTop;
          let rippleDiv = document.createElement("div");
          rippleDiv.classList.add('ripple');
          rippleDiv.setAttribute("style","top:"+Y+"px; left:"+X+"px;");
          let customColor = this.getAttribute('ripple-color');
          if(customColor) rippleDiv.style.background = customColor;
          this.appendChild(rippleDiv);
          setTimeout(function(){
            rippleDiv.parentElement.removeChild(rippleDiv);
          }, 900);
    }
  }
  }