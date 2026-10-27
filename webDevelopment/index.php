<!-- 

/webDevelopment/index.php , the entry page for my 
web development projects folder

Programmed by Mitchell Seitz, March 14 2024. 

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

        <h1 class="pagetitle"> Web Development </h1>
        
        <p class="paragraphStandard">

            I still remember my first time trying web development. I 
            was in fifth grade, and I made some 
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
            me a chance to improve some of those skills. 
            I based this portfolio on on the CSStore, cleaned things 
            up a lot, and made the design much more appealing. This was 
            a good chance to work on my front-end design skills, and I was 
            able to really improve my grasp of CSS by spending some time 
            here and there working on and experimenting with the interface.
            <br><br>
            The next step for my web development journey came in the form 
            of a take-home project I did while interviewing for a software 
            developer internship. I was tasked with designing a 
            <a href="libraryProject.php">Full-Stack Library Website</a> 
            capable of reading books from a database, sorting them 
            by various means, and adding new books to the database. This 
            was much simpler than the previous projects I've done, and only 
            took me a few hours. 
            <br><br>
            Building that library site gave me the urge to fully dive in and 
            make a fully production-qualtiy full-stack website better than 
            anything I've made so far. If I get the time, that's next on 
            my to-do list. 
            
        </p>

    </div>

</main>

<?php 
//including footer 
include '../res/footer.php'; 
?>