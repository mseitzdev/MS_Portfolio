/* -----------------------------------------------
/* How to use? : Check the GitHub README
/* ----------------------------------------------- */

/* To load a config file (particles.json) you need to host this demo (MAMP/WAMP/local)... */
/*
particlesJS.load('particles-js', 'particles.json', function() {
  console.log('particles.js loaded - callback');
});
*/

/* Otherwise just put the config content (json): */

particlesJS('particles-js',
  
  {
    "particles": {
      "number": {
        "value": 160, /*Number of dots, original 80*/
        "density": {
          "enable": true,
          "value_area": 800
        }
      },
      "color": {
        "value": "#daa520" /*Change color to goldenrod from default*/
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 0,
          "color": "#000000"
        },
        "polygon": {
          "nb_sides": 5
        },
        "image": {
          "src": "img/github.svg",
          "width": 100,
          "height": 100
        }
      },
      "opacity": {
        "value": 1, /*Change particle opacity to 1 */
        "random": false,
        "anim": {
          "enable": false,
          "speed": 1,
          "opacity_min": 0.1,
          "sync": false
        }
      },
      "size": {
        "value": 2, /*5 is the default value, dot size*/
        "random": false, /*Randomizes size if true, true is default*/
        "anim": {
          "enable": false,
          "speed": 40,
          "size_min": 0.1, 
          "sync": false
        }
      },
      "line_linked": {
        "enable": true,
        "distance": 100, /*Change the line max distance, default 150*/
        "color": "#ffffff",
        "opacity": 0.6, /*Change the line opacity*/
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 0.5, /*Adjust dot speed, default 6*/
        "direction": "none",
        "random": false,
        "straight": false,
        "out_mode": "bounce", /*out = dots leave edge, bounce = dots bounce off edge.*/
        "attract": {
          "enable": false,
          "rotateX": 600,
          "rotateY": 1200
        }
      }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": false, /*disable onhover*/
          "mode": "repulse"
        },
        "onclick": {
          "enable": true, /*disable onclick*/
          "mode": "push"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 400,
          "line_linked": {
            "opacity": 1
          }
        },
        "bubble": {
          "distance": 400,
          "size": 40,
          "duration": 2,
          "opacity": 8,
          "speed": 3
        },
        "repulse": {
          "distance": 200
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": true,
    "config_demo": {
      "hide_card": false,
      "background_color": "#b61924",
      "background_image": "",
      "background_position": "50% 50%",
      "background_repeat": "no-repeat",
      "background_size": "cover"
    }
  }

);