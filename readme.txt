MS_Portfolio - See it live on mseitz.dev!

Created by Mitchell Seitz, May 2024

Copyright Mitchell Seitz, May 01 2024-Present
Sources for base code & inspirations below 

This is the source code for my developer portfolio website, programmed 
using PHP, HTML, CSS, and JavaScript. Please see the bottom of this 
readme for borrowed code sources. 
_______________________________________________________________________

Notes, by topic:

Remember to check chrome, firefox, safari, and edge on macos / windows / 
ios / android / ubuntu after major changes.

Background Behavior: 
   - When changing background particle behavior, please edit 
     MS_Portfolio/res/particles/app.js 
   - MS_Portfolio/res/particles/particles.js has the default values. 
   - Clear browser cache and hit refresh.
_______________________________________________________________________

Issues & Bugs: 

- Firefox on ubuntu renders differently than other tested browser/os. 
  Particles.js background animation is faster, cause unknown. 

- For some reason, the header logo is in a slightly different position 
  on the filled pages (about.php, MATH1651 overview) than emptier ones. 
  Cause unknown. Tested and found on Chrome/Safari/Firefox on MacOS. 
_______________________________________________________________________

Borrowed Code and Inspirations:

Big thanks to the following sources that helped me make this project

Vincent Garreau, Particles.js: 

   https://github.com/VincentGarreau/particles.js

   This is the library I used to make the background for the website, 
   and you can find the files in res/particles. I modified them as 
   needed to suit the needs of this website. 

w3 Schools, I based the menu system off of:  
   1: https://www.w3schools.com/howto/howto_js_sidenav.asp
   2: https://www.w3schools.com/howto/howto_js_dropdown_sidenav.asp

Remi Laudanski, their codepen example helped me build the 1651 study 
guide mini-menu: 

    1: https://codepen.io/remilaudanski/pen/gbBGyN,
    2: https://codepen.io/remilaudanski