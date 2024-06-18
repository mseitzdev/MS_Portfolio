<!-- 

about/index.php

Programmed by Mitchell Seitz, March 6 2024. 

This page functions as the about me page for 
my portfolio. This contains an explanation of 
me, a little about my story, my qualifications, 
etc. 

-->

<?php 

//inclding program header, forces secure connection.
include '../res/header.php'; 

?>

<main class="information">
    
    <!-- Home page -->
    <div class="mainbox">

        <h1 class="pagetitle">About Me</h1><br>
        
        <p style="font-size: 19px; text-align: left;">

            My name is Mitchell Seitz, and I'm a third-year Comp Sci student at Thompson Rivers University.
            I've also run a small business as a handyman, worked a variety of jobs, and helped start 
            and run a nonprofit organization dedicated to raising support for youth in and 
            from the foster care system. My journey to this point has been fairly unique, so I might as well tell you 
            a bit about myself so you can understand how I got here. 
            <br><br> 
            During High School, I ended up homeless and then in the 
            foster care system. In order to stay in school during this time, I switched to a 
            school that only had space available in a trades co-op program. It was here I learned the skills 
            that kept me going throughout young adulthood, and spent most of my time on a construction site or landscaping.
            I graduated at 17, and at 18 I registered for a business license and began working 
            as a handyman in my spare time to get extra money to support myself. I also worked service jobs, landscaping, 
            demolition, construction, property maintenance, and other jobs to make ends meet. 
            <br><br>
            During that part of my life, I still found myself curious, and started spending my spare time learning anything 
            I could find. I started by 
            bringing home university textbooks left by university graduates in the apartment buildings I worked in for one of my 
            jobs. I was interested in a variety of things, like math, neuroscience, 
            and human biology. Later on, my curiosity took a more technical focus, and 
            I started learning math in the break room at a grocery store I worked at, solving brilliant.org 
            problems on the bus, or using the wolfram problem generators to test myself. I also learned some python, 
            started messing around with an arduino and raspberry pi, and dabbled in languages. 
            <br><br>
            At some point, I felt like I had caught up on learning I didn't really get a chance to do in High School, and when I 
            was 19 I decided I wanted to pursue university education. However, I was juggling multiple jobs, and didn't have 
            pre-requisites for admission to school. I didn't want to do more High School though, so I enrolled with Athabasca 
            University, where I could study online around my schedule. Because AU courses transfer well to pretty much any 
            university in Canada, I took this route to avoid having to do pesky pre-requisites and get some uni done.  
            <br><br>
        </p>

            <div style="text-align: center;">
                <img src="AUStart.png" alt="My grades from my first semester at AU." style="max-width: 90%; max-height: 300px">
                <h5> My first University courses. </h5>
            </div>

        <p style="font-size: 19px; text-align: left;">

            <br>
            Of course, I was still a teenager at the time, and had pretty limited time and money. Over the next few years, I
            took courses at AU as I was able. I completed twelve courses with a 3.71 GPA on a 4.00 GPA scale,
            focusing on tech courses including Data Structures & Algorithms, Calculus, Stats, 
            Programming in Java, C++, Web Development, Systems Analysis and Design, and a few others.
            <br><br>
            Of course, studying online is kind of boring. Luckily, I had friends to keep me compnay during this time, 
            including some amazing people who I met in the foster care system as a teenager. When I reconnected 
            with a few of them, it turned out a few of us had the same idea. There was one person, though, who 
            who really had what it took to bring us together and lead us in bringing that idea to life. 
            <br><br> 

        </p>

    </div>

</main>

<?php 
//including footer 
include '../res/footer.php'; 
?>