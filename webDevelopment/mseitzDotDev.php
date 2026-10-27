<!-- 

/webDevelopment/mseitzDotDev.php

This page explains the original PHP portfolio implementation.

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
            <img src="portfolioScreenshot.png" alt="The legacy PHP portfolio homepage with its original black and gold interface." style="max-width: 90%; max-height: 450px">
            <h5> The PHP portfolio with updated project-focused content. </h5>
        </div>
        <br>
        
        <p class="paragraphStandard">
            After completing COMP 3451, I got to work cleaning up the messy code 
            from that project and turning it into something usable as my portfolio.
            <a href="https://github.com/mseitzdev/MS_Portfolio"> 
            You can see the legacy PHP source on my GitHub by clicking here.
            </a>
            <br><br>
            I began by taking the 
            <a href="CSS_Store.php">CSS Store</a>
            and removing any unecessary PHP and SQL, before putting 
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
            This PHP implementation is preserved as a legacy showcase of my
            original interface design and development work. Development now
            continues in the <a href="https://github.com/mseitzdev/mseitz.dev">Eleventy version</a>,
            live at <a href="https://mseitz.dev">mseitz.dev</a>.
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
