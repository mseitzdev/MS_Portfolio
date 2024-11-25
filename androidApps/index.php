<!-- 

/androidApps/index.php , the entry page for my 
android apps project folder. 

Programmed by Mitchell Seitz, March 14 2024. 

-->

<?php 

//setting the page title 
$pageTitle = "Android Applications";

//inclding program header, forces secure connection.
include '../res/header.php'; 

?>

<main class="information">
    
   <!-- Home page -->
    <div class="mainbox">

        <h1 class="pagetitle">Android Apps </h1>
        
        <p class="paragraphStandard">

            I was first introduced to writing Android apps 
            in the course COMP 2161 at Thompson Rivers University, 
            where I wrote a variety of apps under the instruction of 
            my professor, Musfiq Rahman. My two favorite app projects 
            from this course are my 
            <a href="busSimulator.php"> Transit System Simulator </a>
            , which was my final project in the course, and the
            <a href="androidCalc.php"> Scientific Calculator</a>
            , which was my first real GUI program. 
            With my professor's permission, I am showing you these 
            programs here.
            <br><br>
        </p>

        <div style="text-align: center;">
            <img src="musfiqPermission.png" alt="Permission from Musfiq Rahman to share my school projects" style="max-width: 90%; max-height: 350px">
            <h5> Musfiq Rahman giving me permission to share these projects. </a> </h5>
        </div>
        <br>

        <p class="paragraphStandard">

            I look forward to writing more android apps, and have 
            been talking with a friend about some ideas for an app 
            that would be useful for frankenphone users to analyze 
            and manage non-stock battery configurations on their phones. 
            We're both a little busy as of late, but that's likely 
            how I'll dip back into android development if I ever return.

            
        </p>

    </div>

</main>

<?php 
//including footer 
include '../res/footer.php'; 
?>