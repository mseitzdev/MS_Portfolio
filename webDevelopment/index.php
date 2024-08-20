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

            I still remember my first website from fifth grade. I made some 
            kind of tan-color abomination of a website teaching 
            the basics of HTML and CSS. Afterwards, I made another 
            basic website in my early teens, hosted on the same URL as a 
            minecraft server I played on with my friends. 
            I felt cool telling people I had my own 
            website and showing them what I made. 
            Life went on, and I didn't get a chance to re-visit web development till I
            was in university.
        </p>

        <br>
        <div style="text-align: center;">
            <img src="codeExample.png" alt="Example of code I wrote" style="max-width: 90%; max-height: 450px">
            <h5> Some PHP and SQL from my CSS store. </a> </h5>
        </div>
        <br>

         <p class="paragraphStandard">

            Once in uni, I found myself making websites 
            for courses, with my first worthwhile one being the 
            <a href="CSS_Store.php"> Computer Science Student Store,</a>
            a full-stack LAMP website functioning as a simulated
            store for computer science students. I designed it to 
            meet assignment criteria and get me a high grade, and I 
            got that A+ I was after, but it's not something I'd
            consider worth showing off. 
            <br><br>
            Fortunately, 
            <a href="mseitzDotDev.php"> This Portfolio </a> gave
            me a chance to improve some of those skills, 
            and I based this portfolio on on the CSStore, cleaned things 
            up a lot, and made the design much more appealing. Unfortunately, 
            I didn't see much of a use for a database or much JS in this portfolio, so 
            for now I'll have improving those skills on my to-do list. Stay tuned!
            
        </p>

    </div>

</main>

<?php 
//including footer 
include '../res/footer.php'; 
?>