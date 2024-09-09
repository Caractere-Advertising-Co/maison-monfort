import inView from "in-view";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger.js";

gsap.registerPlugin(ScrollTrigger);

$(document).ready(function () {
  //IN-VIEW
  if (document.querySelector(".from-left")) {
    document.querySelector(".from-left").classList.add("invisible");
  }
  if (document.querySelector(".from-right")) {
    document.querySelector(".from-right").classList.add("invisible");
  }
  if (document.querySelector(".from-top")) {
    document.querySelector(".from-top").classList.add("invisible");
  }
  if (document.querySelector(".from-bottom")) {
    document.querySelector(".from-bottom").classList.add("invisible");
  }

  function makeMagic(data, direction) {
    data.classList.remove("invisible");
    data.classList.add(direction);
  }

  // function removeMagic(data, direction) {
  //   data.classList.add("invisible");
  //   data.classList.remove(direction);
  // }

  inView.offset(180);

  inView(".from-left").on("enter", (el) => {
    makeMagic(el, "fade-in-left");
  });

  inView(".from-right").on("enter", (el) => {
    makeMagic(el, "fade-in-right");
  });

  inView(".from-bottom").on("enter", (el) => {
    makeMagic(el, "fade-in-bottom");
  });

  inView(".from-top").on("enter", (el) => {
    makeMagic(el, "fade-in-top");
  });


  inView(".from-left").on("exit", (el) => {
    removeMagic(el, "fade-in-left");
  });

  inView(".from-right").on("exit", (el) => {
    removeMagic(el, "fade-in-right");
  });

  inView(".from-bottom").on("exit", (el) => {
    removeMagic(el, "fade-in-bottom");
  });

  inView(".from-top").on("exit", (el) => {
    removeMagic(el, "fade-in-top");
  });

  /* ANIMATION NUMBER */
  const counters = document.querySelectorAll(".animate-number");
  const speed = 100;

  inView(".grid_stats").on("enter", (e) => {
    counters.forEach((counter) => {
      const animate = () => {
        const value = +counter.dataset.number;
        const data = +counter.innerText;

        const time = value / speed;
        if (data < value) {
          counter.innerText = Math.ceil(data + time);

          if (value < 100) {
            setTimeout(animate, 40);
          } else {
            setTimeout(animate, 2);
          }
        } else {
          counter.innerTexte = value;
        }
      };

      animate();
    });
  });
});

/* Accordion animation */

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}


/* Voir plus de marques */

var seeMoreBtn = document.getElementsByClassName('moreMarques');

for(let element of seeMoreBtn){
  element.addEventListener('click', function(){
    console.log(click);
  })
}

window.addEventListener('scroll', function() {
  var separator = document.querySelector('.separator');
  var scrollPosition = window.scrollY; // Utilisation de scrollY à la place de pageYOffset

  var imageSrc = separator.style.backgroundImage.replace(/url\((['"])?(.*?)\1\)/gi, '$2').split(',')[0];

  var image = new Image();
  image.src = imageSrc;

  // Calculer la hauteur de l'image après le chargement
  image.onload = function () {
    var imageHeight = image.height;

    // Ajuster la position du background en fonction du défilement et de la hauteur de l'image
    separator.style.backgroundPositionY = ((imageHeight /2) - (scrollPosition * 0.3)) + 'px'; // Ajuster la vitesse du parallax
  };
});
