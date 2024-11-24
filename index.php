<!-- 

Index.php , the main file for my portfolio. 

Programmed by Mitchell Seitz, March 6 2024. 

This page functions as the about me page for 
my portfolio.

-->

<?php 

//setting the page title 
$pageTitle = "Home";

//inclding program header, forces secure connection.
include 'res/header.php'; 

?>

<main class="information">
    
    <!-- Home page -->
    <div class="mainbox">

        <h1 class="pagetitle">Welcome to my portfolio!</h1>
    
        <!-- Social Media Links-->
        <?php include $document_root . '/res/socialLinks.php' ; ?>

        <p class = "paragraphStandard">

            My name is Mitchell Seitz, and I am a Third-year Computer Science
            student at Thompson Rivers University. I've had a bit of a unique 
            journey to this point, so if you would like to learn more about 
            me as a person then check out my
            <a href="/about/"> About Me</a> page.
            <br><br>
            If you want to see some of my projects, check out the menu at the 
            top left or head to 
            <a href="https://github.com/mseitzdev">My Github</a>,
            and if you'd like to connect then head over to 
            <a href="https://www.linkedin.com/in/mitchell-s-888526b0/"> My Linkedin </a>
            or reach me via 
            <a href="mailto:mseitz@mseitz.dev">Email</a> 
            at 
            <b> mseitz@mseitz.dev</b>

        </p>

    </div>

</main>

<?php 
//including footer 
include 'res/footer.php'; 
?>