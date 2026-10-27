<!-- 

Index.php , the main file for my portfolio. 

Programmed by Mitchell Seitz, March 6 2024. 

Home page for the legacy PHP portfolio showcase.

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

            This is the original PHP portfolio by Mitchell Seitz, built with
            HTML, CSS, JavaScript, and reusable PHP includes. Explore the projects
            to see the interface design, implementation, and technical details.
            <br><br>
            This version is preserved as a legacy showcase. Visit
            <a href="https://mseitz.dev">mseitz.dev</a> for the current portfolio,
            or explore the
            <a href="https://github.com/mseitzdev/MS_Portfolio">PHP source code</a>.
            <br><br>
            If you want to see some of my projects, check out the menu at the 
            top left or head to 
            <a href="https://github.com/mseitzdev">My Github</a>,
            and if you'd like to connect then head over to 
            <a href="https://www.linkedin.com/in/mitchell-s-888526b0/"> My Linkedin </a>
            or
            <a href="mailto:mseitz@mseitz.dev">Email me</a> 
            at: 
            <br><br>
        </p>

        <b> mseitz@mseitz.dev</b>

    </div>

</main>

<?php 
//including footer 
include 'res/footer.php'; 
?>
