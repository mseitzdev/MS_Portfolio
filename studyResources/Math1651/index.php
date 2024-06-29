<!-- 

/studyResources/MATH1651/index.php 

This page is the overview for the study guide I made for the 
course MATH 1651 at TRU.

Programmed by Mitchell Seitz, March Jun 27 2024. 

-->

<?php 

//inclding program header, forces secure connection.
include '../../res/header.php'; 

?>

<main class="information">
    
   <!-- Home page -->
    <div class="mainbox">
        
        <h1 class="pagetitle">MATH1651 - Overview</h1>

        <!-- Module Menu -->
        <?php include '1651ModuleMenu.php'; ?>

        
        <h2 style="margin-top: 10px;"> Introduction </h2>
        <br>
        
        <p class="paragraphStandard">

            Because I spent most of high school on a construction site, I 
            ended up needing to self-teach most of the math I know. I 
            recognize a lot of the course material as things I learned 
            from brilliant.org before I ever started in University, and 
            I am lucky that I by chance happened to build a solid math 
            foundation via self-teaching before starting University.
            <br><br>
            For those of you taking MATH 1651 as mature students, you may be 
            in a similar boat, and after having already completed Calculus 
            and Statistics during my first year, the best advice I can 
            give for learning math as adults is that it is important to 
            learn rules for exponents, fractions, square roots, 
            trig, geometry, polynomials, and anything else that you can 
            find that you may have missed or forgotten from high school. 
            <br><br> 
            For those of you fresh into TRU after high school or a relevant
            college program, congrats! You already probably have what you
            should know for beginning this course. Feel free to use these 
            resources to supplement your existing knowledge. 
            <br><br>
            I have compiled here a list of important resources that I have 
            studied during this course as a student, or from my earlier curiosity,
            and hope that they can benefit you as much as they have benefitted 
            me. I have sorted them into general resources and then for each 
            module and topic of our program.

        </p>

        <br>
        <h2> Preparatory Resources </h2>
        <br>

        <p class="paragraphStandard">

            If you have some money to spend, you will likely benefit from
            Brilliant.org, which is where I formed my foundation 
            of math knowledge. A subscription costs between 10-30$ USD/CAD 
            monthly at the time I am writing this. I no longer use Brilliant as a 
            service, but it taught me the basics of many 
            things that come up in this course before I even started. 
            <br><br>
            For mature students, I strongly 
            recommend giving Brilliant a solid go before even enrolling in this 
            course. You won't regret it, and it will teach you a lot of what is 
            in this course already if you go through the logic, symbols, algebra, 
            and other course-related sections. 

        </p>

        <br>
        <h3 class="zoomLink"> 
          <a href="https://brilliant.org/home/"> Check out Brilliant.org! </a> 
        </h3>
        <br>

        <p class="paragraphStandard">

            Other than, or in addition to brilliant, make sure to brush up on the 
            following basic math rules, as they can prevent you from making small 
            mistakes and ensure that you can present your answers in the proper 
            format:

        </p>

        <br>
        <h3 class="zoomLink"> 
          <a href="https://www.mathsisfun.com/numbers/simplify-square-roots.html"> 
            Simplifying Square Roots 
          </a> 
        </h3>

        <br>
        <h3 class="zoomLink"> 
          <a href="https://www.cuemath.com/algebra/exponent-rules/"> 
            Exponent Rules
          </a> 
        </h3>

        <br>
        <h3 class="zoomLink"> 
          <a href="https://www.splashlearn.com/math-vocabulary/fractions/fraction-rules"> 
            Fraction Rules 
          </a> 
        </h3>

        <br>
        <h3 class="zoomLink"> 
          <a href="https://www.geeksforgeeks.org/can-a-fraction-be-negative/"> 
            Can fractions be Negative? 
          </a> 
        </h3>

        <br>
        <p class="paragraphStandard">

            If you're like me starting and haven't done math in a while, you may feel more comfortable
            after practicing general algebra before starting this course. I feel no shame 
            in ocassionally practicing algebra after not doing math in a long time, as it 
            fires up my math brain and gets me ready for more complex topics. Think of it 
            as a warmup - You wouldn't stop working out for a year and head to the gym to 
            lift the biggest weight of your life, so don't feel bad about practicing y=mx+b
            before heading into university level math. 
            <br><br>
            Here are some khan academy lessons that make a good warmup: 

        </p>

        <br>
        <h3 class="zoomLink"> 
          <a href="https://www.khanacademy.org/math/algebra/x2f8bb11595b61c86:forms-of-linear-equations"> 
            Khan Academy - Forms of Linear Equations 
          </a> 
        </h3>

        <br>
        <h3 class="zoomLink"> 
          <a href="https://www.khanacademy.org/math/trigonometry"> 
            Khan Academy - Trigonometry
          </a> 
        </h3>

        
        <br>
        <p class="paragraphStandard">

            If you're really not familiar with math, here is a link to all algebra on 
            Khan Academy, which is likely more than what you need, but 
            I included it here because I think it can provide the math you 
            need to know to start this course. It's probably overkill to do all 
            of this for most people, but if someone had zero math knowledge, 
            I'd think that this could get them ready for not just this course,
            but any first year math course. For most people, just pick out 
            things you see in this course that you struggle with, and it should 
            be a useful adjunct to your learning.

        </p>

        <br>
        <h3 class="zoomLink"> 
          <a href="https://www.khanacademy.org/math/algebra-home"> 
            Khan Academy - All Algebra
          </a> 
        </h3>
        <br>

        <p style="font-size: 19px; ">

            Finally, I have separated resources by module. The three ways to navigate are:
            <br><br>
            1: Via the side menu, under "Study Resources -> Math 1651"<br><br>
            2: Via the module menu at the top of the study guide pages<br><br>
            3: Via the links at the bottom of the page:<br><br>

        </p>

        <?php 
            //including the module links at the bottom of the page
            include '1651ModuleLinks.php'; 
        ?>

    </div>

</main>

<?php 
//including footer 
include '../../res/footer.php'; 
?>