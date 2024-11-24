<!-- 

/androidApps/mseitzDotDev.php

This is the file explaining my first real 
website, the computer science student store.

Programmed by Mitchell Seitz, March 14 2024. 

-->

<?php 

//setting the page title 
$pageTitle = "Portfolio Website";

//inclding program header, forces secure connection.
include '../res/header.php'; 

?>

<main class="information">
    
   <!-- Home page -->
    <div class="mainbox">

        <h1 class="pagetitle"> Developer Portfolio </h1>

        <br>
        <div style="text-align: center;">
            <img src="portfolioScreenshot.png" alt="Screenshot of this website during development." style="max-width: 90%; max-height: 450px">
            <h5> This portfolio as of Nov 17/2024 </a> </h5>
        </div>
        <br>
        
        <p class="paragraphStandard">
            After completing COMP 3451, I got to work cleaning up the messy code 
            from that project and turning it into something usable as my portfolio.
            <br><br>
            I began by removing any unecessary PHP and SQL, before putting 
            some time into experimenting with the CSS and removing as much unecessary 
            code as posssible. After getting things cleaned up, I got to work testing 
            across different browsers, operating systems, and devices. During this 
            process, I learned some tricks to make sure websites work on different 
            platforms - use images rather than text for UI elements, keep animations 
            and interactions simple, don't rely too much on CSS for image manipulation, 
            etc. I began to feel much more comfortable with UI design throughout this 
            process. 
            <br><br>
            Then, to add some flair to this website, I used 
            <a href="https://vincentgarreau.com/particles.js/">Particles.js</a>
            to create the background, customizing it to fit the color scheme. After 
            that, I started diving through the CSS of the site to get the color scheme
            and element transparency right, before using image editors to get the logo, 
            menu button, and other elements to a place I felt looked nice across
            devices and browsers.
            <br><br>
            Once I was satisfied, I began filling in the rest of the web pages with 
            content, as well as adding things like page titles, Icon, social media
            and contact links, and more.
            <br><br>
            This project will continuously evolve as time goes on, so stay tuned!
            <br><br>
        </p>

        <h1>
            <a href="https://github.com/mseitzdev/MS_Portfolio"> 
                See the code on my Github!
            </a>
        </h1>

    </div>

</main>

<?php 
//including footer 
include '../res/footer.php'; 
?>