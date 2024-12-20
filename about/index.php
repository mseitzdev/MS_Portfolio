<!-- 

/about/index.php

Programmed by Mitchell Seitz, March 6 2024. 

This page functions as the about me page for 
my portfolio. This contains an explanation of 
me, a little about my story, my qualifications, 
etc. 

-->

<?php 

//setting the page title
$pageTitle = "About Me";

//inclding program header, forces secure connection.
include '../res/header.php'; 

?>

<main class="information">
    
    <!-- Home page -->
    <div class="mainbox">

        <h1 class="pagetitle">About Me</h1>

        <div style="text-align: center;">
            <img src="me.png" alt="A pic of me" style="max-width: 90%; max-height: 600px; border-radius: 50%;">
            <h5> Picture of me, taken by <a href="https://vivian-patruno.squarespace.com/"> Vivian Patruno</a> </h5>
        </div>
        <br>
        
        <p class="paragraphStandard">

            My name is Mitchell Seitz, and I'm a third-year Comp Sci student at Thompson Rivers University.
            I've been studying online for my University education, and so I suppose I'm 
            a self-taught developer as well. I also ran a small business as a handyman, and am a co-founder of
            Project Outsiders, a nonprofit dedicated to supporting youth in and from the foster care system. 
            My journey here has been somewhat unique, so I might as well tell you a bit about myself so you can understand 
            how I got here. 
            <br><br> 
            During High School, I ended up homeless and then in the 
            foster care system. In order to stay in school, I switched to a 
            school that only had space available in a trades co-op program.
            I graduated at 17, and at 18 I registered a business and began working 
            as a handyman. I also worked service jobs, landscaping, 
            demolition, construction, property maintenance, and other jobs. 
            <br><br>
            After graduating, I found myself curious, and started self-teaching things I missed in school. 
            Initially, I brought home university textbooks left by graduates in some apartment buildings I worked in.
            I was interested in a variety of things, like math, neuroscience, 
            and biology. Later, my curiosity took a more abstract focus, and 
            I started using brilliant.org, practicing with the wolfram problem generators, and learning 
            from a highschool math book I got at a thrift store.
            I also learned some python, started messing around with an arduino and raspberry pi, and dabbled in languages. 
            <br><br>
            Eventually, I felt like I had caught up on learning, and at
            19 I decided to pursue university education. I enrolled with Athabasca 
            University, which has open admission for online courses that transfer well to other Canadian schools.
            The flexibility was nice, but truthfully I took this route to avoid doing pre-requisites.
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
            One of those people was Chanice McAnuff. She took on the commitment and responsibility 
            of leading the organization, and I was happy to work with her to find ways to make our 
            goals work as a co-founder. 
            During 2020, we started meeting online to 
            form the basis for what the organization would look like. At some point, we started to meet in person, 
            setting up AV equipment and getting ready to record media to bring attention to our cause. It started 
            with a podcast, but grew to include events, media training, outreach, social media, and more.  
            <br><br> 
            Project Outsiders grew quickly, and after lots of hard work, networking, funding proposals, 
            and planning, we were able to begin filming "The Youth In Care Project" documentary. Between 2021 and 
            2023, production proceeded, and finally we were able to premire at the 
            <a href="https://torontoobserver.ca/2023/11/16/the-youth-in-care-project/"> 
                Toronto International Film Festival in November 2023. 
            </a> 
            <br><br>
            Project Outsiders was and is very important to me, and I met many of my best friends during the course 
            of our activism. It was amazing to be able to work with people who had similar backgrounds to my own 
            and were still able to work hard and succeed.
            I learned a lot, and I am a better and 
            more well-rounded person because of it. I will be forever grateful that I 
            was able to spend my early twenties with such amazing people.
            <br><br>

        </p>

        <div style="text-align: center;">
            <img src="TRUStart.png" alt="My TRU BCS program completion as of jul 2024" style="max-width: 90%; max-height: 450px">
            <h5> My progress through uni at the time I made this portfolio.</h5>
        </div>
        <br>

        <p class="paragraphStandard">

            Of course, juggling my small business, activism, school, other jobs, and family responsibilities 
            was a lot, and at some point I had to narrow my activities and focus more on school. 
            I started this by transferring to 
            Thompson Rivers University in 2023. I chose TRU because the program structure allows 
            me to take classes online via Open Learning, in person at TRU, or any accredited university in Canada.
            Truthfully, a big reason why I chose TRU because my younger years were quite chaotic, and I like the security 
            of being able to continue getting educated regardless of my living situation,
            budget, location, or other factors that may get in the way of traditional school. 
            <br><br>
            As of Summer 2024, I started stepping back a lot from activism and work, 
            and have been focusing on portfolio building, personal projects, finding internships and/or freelance work, 
            and getting ready to study full-time until I am done my degree. I'll be adding more to this 
            portfolio shortly, so stay tuned!

        </p>

        <br>
        <h2 class="pagetitle">Life still in progress! Stay tuned for more :)</h2><br>

        <!-- Social Media Links-->
        <?php include $document_root . '/res/socialLinks.php' ; ?>
        <p class="paragraphStandard">
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
include '../res/footer.php'; 
?>