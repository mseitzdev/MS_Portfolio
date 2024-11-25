<!-- 

/webDevelopment/libraryProject.php,

A page showing the website I made for Second Bind.

Programmed by Mitchell Seitz, Nov 24 2024. 

-->

<?php 

//setting the page title 
$pageTitle = "Web Development";

//inclding program header, forces secure connection.
include '../res/header.php'; 

?>

<main class="information">
    
   <!-- Home page -->
    <div class="mainbox">

        <h1 class="pagetitle"> Library Project </h1>
        <br>

        <!-- Youtube video -->
        <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; z-index:0;">
            <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
            src="https://www.youtube.com/embed/6CfMlTaB5BQ?si=CKccaf580t-kfXf4" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
        </div>
        <br>
        <br>
        
        <p class="paragraphStandard">

            During my internship search, I was offered a chance to do a coding project for Second Bind, and 
            put this website together. It's a full-stack website built with PHP, SQL, HTML, Javascript, and CSS,
            and It only took me a few hours to build this library from the code I 
            wrote for this portfolio & the <a href="CSS_Store.php">CSS Store</a> project I made for school, 
            and building it made me realize that I've gotten to a much more comfortable place with web 
            development compared to where I started.
            <br><br>
            It's a combination of the cleaned-up code and design of this portfolio 
            mixed with full-stack functionality like the CSS Store. Although I still wouldn't consider 
            this project code to be production quality due to the lack of input sanitation and validation testing, 
            I enjoyed making it because it gave me a chance to mix the improved UI development skills I've 
            developed making this portfolio with the takeaway lessons & LAMP stack experience I got from the
            CSStore project. 
            <br><br>
            Making this library site made me feel like jumping back into LAMP development and developing something
            with the accounts, orders, & other breadth of functionality of the CSS Store project, but with better 
            usability & UI like this library and the portfolio website you're reading this on. I've learned enough 
            now, so if I get the time I think I'll make a foruth website better than the ones I've made so far.
            <br><br>
            
        </p>

        <p>
            <b>Stay tuned, and if you want to check this project out more...</b>
        </p>
        <br>

        <h1>
            <a href="https://github.com/mseitzdev/Library_Project"> 
                See the code on my Github!
            </a>
        </h1>

    </div>

</main>

<?php 
//including footer 
include '../res/footer.php'; 
?>