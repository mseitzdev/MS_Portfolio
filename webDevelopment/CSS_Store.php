<!-- 

/androidApps/CSS_Store.php

This is the file explaining my first real 
website, the computer science student store.

Programmed by Mitchell Seitz, March 14 2024. 

-->

<?php 

//setting the page title 
$pageTitle = "CompSci Student Store";

//inclding program header, forces secure connection.
include '../res/header.php'; 

?>

<main class="information">
    
   <!-- Home page -->
    <div class="mainbox">

        <h1 class="pagetitle"> Computer Science Student Store</h1>
        
        <!-- Youtube video -->
        <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; z-index:0;">
            <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
            src="https://www.youtube.com/embed/pZSa_yPSQQQ?si=vmp78X9WgtXzkina" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
        </div>
        <h5> A video explaining this program, submitted with the project. </h5>
        <br>
        
        <p class="paragraphStandard">
            
            This website is a prototype web store, which I created as a school project 
            for COMP 3541 at Thompson Rivers University. It's a full-stack LAMP site 
            utilizing HTML, CSS, PHP, and MySQL to create a web store. With the permission 
            of my professor, I'm sharing it here, as I used it as a 
            prototype to build this portfolio site and I think it's a good way to 
            show where I started.
        </p>

        <br>
        <div style="text-align: center;">
            <img src="sarahPermission.png" alt="Permission to share this project" style="max-width: 90%; max-height: 450px">
            <h5> Sarah Carruthers, my prof, giving me permission to share this project.</h5>
        </div>
        <br>

        <p class="paragraphStandard"> 
            
            This website's functionality includes drawing product data 
            from a database, making it available for the user to search through 
            and view, user account creation, editing, and deletion, 
            a shopping cart, order placement, and the viewing of previous orders.
            Relevant information is stored in the SQL database. 
            <br><br>

            Keeping with directions given in the course, 
            I developed this website adhering to a interperetation of the 
            <a href="https://www.codecademy.com/article/mvc">  
                MVC/Model-View-Controller model.
            </a>
            The page index.php forms the controller, with other php functions 
            loaded in from data/functions.php. View elements for different 
            sections of the website are loaded into the body of index.php 
            as needed, and are located in the views folder of the program.
            The website uses session info to track the user, and will display
            different content and allow different operations on different 
            pages depending on if the user is logged in or not.
            <br><br>
            This program design was fun to do and allowed me to score full 
            marks from my professor, as MVC adherence was something we were marked on,
            But the website is very inconvenient to use compared to more traditional designs. 
            An example of this is that the forwards/back buttons 
            in your browser don't work, and you can't send a person to a product
            page or other page by giving them a URL for that specific area of the site. In addition, 
            the UI is pretty simple, and the CSS needs some optimization. To take this from 
            school project territory into the real world, I'd need to do solid work to make this program 
            less proof-of-concept and more robust for users and developers working on it. 
            <br><br>
            Although this worked fine for a school project, and it got me the high grades I designed 
            it to get, I knew I could do better, so I made sure 
            to improve the design and clean up the CSS when using this project as the base of my 
            <a href="mseitzDotDev.php"> Developer Portfolio</a>.

        </p>

        <br>
        <h2 class="pagetitle"> What could be improved here?</h2>
        <br>

        <p class="paragraphStandard">

            If I were going to continue developing this web store, I would:
            <br>
            <br>1: Undo my crude MVC adherence and turn views into completely separate pages.
            <br>2: Use the session data to store many things that are currently view element values - such as 
                   user input in the account information update/creations forms, which get wiped if the user 
                   inputs one incorrect value.
            <br>3: Upgrade the database, storing order items away from the order instead of in a string in the order. Add cart 
                   data and anything else that might be convenient to the user to the database.
            <br>4: Add a way to search orders.
            <br>5: Add admin accounts and an admin interface to manage the site without going into the database and source code
                   directly.
            <br>6: Add a payment method and some kind of order confirmation/shipping system.
            <br>7: Do a security audit to make sure input is properly sanitized and the program is otherwise secure.
            <br><br>
            I don't have any plans on developin the web store further as of right now, but it is
            good to know what I could improve. To see the explanation I submitted with the project, 
            <a href="https://youtu.be/pZSa_yPSQQQ">watch the video above or click here,</a> and to see
            the source code and a readme with more detail, click below to see this project on my github. 
            <br><br>
            This portfolio is built using the CSStore as it's prototype, so this is a good example of where 
            my design and HTML/CSS skills have developed after this prototype. 

        </p>
        <br>

        <h1> 
            <a href="https://github.com/mseitzdev/CSS_Store"> 
                See the source code on Github!
            </a>
        </h1>

    </div>

</main>

<?php 
//including footer 
include '../res/footer.php'; 
?>