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

        <!-- Pick an image of me and put it here!-->
        
        <p class="paragraphStandard">

            My name is Mitchell Seitz, and I'm a third-year Comp Sci student at Thompson Rivers University.
            I've been studying online for my University education, and so I guess I consider myself 
            a self-taught developer as well. I've run a small business as a handyman and am a co-founder of
            a nonprofit dedicated to supporting youth in and 
            from the foster care system. My journey here has been somewhat unique, so I might as well tell you 
            a bit about myself so you can understand how I got here. 
            <br><br> 
            During High School, I ended up homeless and then in the 
            foster care system. In order to stay in school, I switched to a 
            school that only had space available in a trades co-op program.
            I graduated at 17, and at 18 I registered a business and began working 
            as a handyman. I also worked service jobs, landscaping, 
            demolition, construction, property maintenance, and other jobs to make ends meet. 
            <br><br>
            After graduating, I found myself curious, and started self-teaching things I missed in school. 
            Initially, I brought home university textbooks left by graduates in some apartment buildings I worked in.
            I was interested in a variety of things, like math, neuroscience, 
            and human biology. Later, my curiosity took a more technical focus, and 
            I spent free time using brilliant.org on the bus, using the wolfram problem generators, and spent my breaks at 
            work reading some of the textbooks I found. 
            I also learned some python, started messing around with an arduino and raspberry pi, and dabbled in languages. 
            <br><br>
            Eventually, I felt like I had caught up on learning, and when I 
            was 19 I decided I wanted to pursue university education. I enrolled with Athabasca 
            University, which has open admission for online courses that transfer well to pretty much any 
            university in Canada. The flexibility was nice, but truthfully I took this route to avoid doing pre-requisites.
            After a few courses, I realized that I was most interested in computer science and decided 
            to pursue this path. I completed twelve courses with a 3.71/4.00 GPA,
            including Data Structures & Algorithms, Calculus, Stats, 
            Programming in Java, C++, and a few others.   
            <br><br>
            
        </p>

        <div style="text-align: center;">
            <img src="AUStart.png" alt="My grades from my first semester at AU." style="max-width: 90%; max-height: 300px">
            <h5> My first University courses. </h5>
        </div>

        <p class="paragraphStandard">

            <br>
            Unfortunately, studying online is kind of boring. Fortunately, I had friends to keep me compnay during this time, 
            including some amazing people who I met in the foster care system as a teenager. When we reconnected,
            it turned out a few of us had the same idea. We imagined a organization, created and led by youth with lived 
            experience in the foster care system, to advocate for and provide support for young people in and from care.
            <br><br> 

        </p>

        <div style="text-align: center;">
            <img src="POWork.png" alt="Chanice and I working on PO." style="max-width: 90%; max-height: 400px">
            <h5> Chanice and I working on set for Project Outsiders. </h5>
        </div>

        <p class="paragraphStandard">

            <br>
            One of those people was Chanice McAnuff, and she took on the commitment and responsibility 
            of leading the organization, and I was happy to work with her to find ways to make our 
            goals work as a co-founder. 
            During 2020, we started meeting on zoom and over the phone to 
            form the basis for what the organization would look like. At some point, we started to meet in person, 
            setting up AV equipment and getting ready to record media to bring attention to our cause. 
            <br><br> 

        </p>

        <h1 class="pagetitle">Writing still in progress! Stay tuned :)</h1><br>

    </div>

</main>

<?php 
//including footer 
include '../res/footer.php'; 
?>