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

        <div style="text-align: center;">
            <img src="codeExample.png" alt="Example of code I wrote" style="max-width: 90%; max-height: 450px">
            <h5> Some PHP and SQL from one of my projects. </a> </h5>
        </div>
        <br>
        
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
            Unfortunately, my life took some 
            interesting turns from then till the time I was an adult, 
            and I didn't get a chance to re-visit web development till I
            was in university.
            <br><br>
            Once I was there, though, I found myself making websites 
            for courses, my favorite project being the 
            <a href="CSS_Store.php"> Computer Science Student Store,</a>
            Which is a full-stack LAMP website functioning as a simulated
            store for computer science students. After completing the web dev 
            course, I decided to go on and create 
            <a href="mseitzDotDev.php"> This Portfolio Website, </a> which has 
            less database functionality than the student store but has a 
            design that I much prefer, as well as giving me a place to host 
            and explain my projects and myself.
            <br><br>
            I'm looking forward to getting more chances at web development through 
            school, personal projects, and work, so stay tuned to see what else 
            I make!

            
        </p>

    </div>

</main>

<?php 
//including footer 
include '../res/footer.php'; 
?>