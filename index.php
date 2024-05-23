<!-- 

Index.php , the main file for my portfolio. 

Programmed by Mitchell Seitz, March 6 2024. 

This file will selectively display other files 
containing contents of the website, as well as 
handle processing of user input and function 
calls.

-->

<?php 

//inclding program header, forces secure connection.
include 'res/header.php'; 

?>

<main class="information">
    
    <!-- Home page -->
    <div class="mainbox">

        <h1 class="pagetitle">Welcome to my portfolio!</h1><br>
        
        <p>
            My name is Mitchell Seitz, and this is my developer portfolio. 
            <br><br>
            During High School, I wasn't ever really able to apply myself and 
            
            <br><br>
             I began exploring 
            my interests across fields such as Neuroscience, Mathematics, Languages, and Computer Programming, 
            eventually deciding to enroll with Athabasca University to skip the highschool pre-requisites and start 
            learning 
            <br><br>
            I am currently a third-year student in the 
            Bachelor of Computing Science program at Thompson Rivers Universtiy, and am also pursuing personal projects 
            in my spare time. I have created this portfolio to show and explain various personal and school projects 
            (With permission from my profs of course). 
        </p>
    </div>

</main>

<?php 
//including footer 
include 'res/footer.php'; 
?>