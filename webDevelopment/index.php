<!-- 

/androidApps/webDevelopment.php , the entry page for my 
web development projects folder

Programmed by Mitchell Seitz, March 14 2024. 

-->

<?php 


//inclding program header, forces secure connection.
include '../res/header.php'; 

?>

<main class="information">
    
   <!-- Home page -->
    <div class="mainbox">

        <h1 class="pagetitle"> Web Development </h1>
        
        <p class="paragraphStandard">

            I still remember my first web development project, 
            which took place while I was in fifth grade. I made some 
            kind of tanned-color abomination of a website teaching 
            the basics of HTML and CSS, and if I still had the files 
            I would have loved to show you. Afterwards, I made another 
            basic website in my early teens, hosted on the same URL as a 
            minecraft server I played on with my friends. I lost that 
            code too, but I felt cool telling people I had my own 
            website in high school and showing them what I made. 
            My life took some 
            interesting turns from then till the time I was an adult, 
            and I didn't get a chance to re-visit web development till I
            was in university.
        </p>

        <br>
        <div style="text-align: center;">
            <img src="codeExample.png" alt="Example of code I wrote" style="max-width: 90%; max-height: 450px">
            <h5> Some PHP and SQL from one of my CSS store. </a> </h5>
        </div>
        <br>

         <p class="paragraphStandard">

            Once I was in uni, though, I found myself making websites 
            for courses, with my first real website being the 
            <a href="CSS_Store.php"> Computer Science Student Store,</a>
            Which is a full-stack LAMP website functioning as a simulated
            store for computer science students. I got an A+ in the course, 
            but the CSStore is still a very basic and rough project. 
            <br><br>
            Fortunately, 
            <a href="mseitzDotDev.php"> This Portfolio </a> gave
            me a chance to improve some of those skills, 
            and I based this portfolion on the CSStore and removed redundant CSS, cleaned things 
            up a lot, and made the design much more appealing. Unfortunately, 
            I didn't see much of a use for a database or much JS in this portfolio, so 
            I'm waiting until I take the next two web dev related courses to 
            improve those skills - Stay tuned!
            
        </p>

    </div>

</main>

<?php 
//including footer 
include '../res/footer.php'; 
?>