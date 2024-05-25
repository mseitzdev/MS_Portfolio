MS_Portfolio

Created by Mitchell Seitz, May 2024

This is the source code for my portfolio website, programmed using 
PHP, HTML, CSS, and JavaScript. 

Big thanks to the following sources that helped me make this project:

Vincent Garreau, Particles.js: 

   https://github.com/VincentGarreau/particles.js

   This is the library I used to make the background for the website, 
   and you can find the files in res/particles. I modified them as 
   needed to suit the needs of this website. 

w3 Schools, where I learned how to make the Menu system: 
   1: https://www.w3schools.com/howto/howto_js_sidenav.asp
   2: https://www.w3schools.com/howto/howto_js_dropdown_sidenav.asp

Notes, by topic:
_______________________________________________________________________

When changing background particle behavior, please edit 

MS_Portfolio/res/particles/app.js, particles.js has the default values. 

Clear browser cache and hit refresh.
_______________________________________________________________________

When porting to other web server: 

1: Ensure that an appropriate PHP server is running alongside apache. Originally developed on XAMPP 8.2.4

2: check permissions for files, make sure things have proper readability

3: Check files menu.php and header.php to ensure that the directories line up. May be different 
   on different hosting setups compared to XAMPP test environment.