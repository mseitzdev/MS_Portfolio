<!-- 

androidCalc.php , the page for my calculator app project

Programmed by Mitchell Seitz, March 14 2024. 

-->

<?php 

//setting the page title 
$pageTitle = "Scientific Calculator";

//inclding program header, forces secure connection.
include '../res/header.php'; 

?>

<main class="information">
    
   <!-- Home page -->
    <div class="mainbox">

        <h1 class="pagetitle">Scientific Calculator</h1>

        <br>
        <div style="text-align: center;">
            <img src="calculator.png" alt="Calculator" style="max-width: 90%; max-height: 500px">
        </div>
        <br>
        
        <p class="paragraphStandard">
            This is my first android app with a realistic use case, a scientific calculator 
            I made while taking COMP2161 at TRU. With the permission of Musfiq Rahman, My professor 
            in that course, I am sharing this as a portfolio project. To test the app yourself or 
            see the source code, head over to my
            <a href="https://github.com/mseitzdev/Scientific_Calculator"> GitHub </a>
            to download the .apk file or Android Studio project.
            <br><br>
            There isn't much to say about this one - It's a scientific calculator with a light/dark mode. 
            It shows the completed operations at the top, followed buy the latest value, and has trig 
            functions, deg/rad, pos/ negative numbers, etc.
            <br><br>
        </p>

        <h4>A basic overview the program:</h4>
        <br>

        <p class="paragraphStandard">
            
            0: The user can toggle system states using the light/dark button, rad/deg button, or store a value M 
            for later use using the set M button. The listener functions for these in MainActivity.java set the 
            relevant variables and update the view as needed.
            <br><br>
            1: The user puts their input in using the number buttons, the trig functions buttons, pi or saved value
            buttons, decimal buttons, etc, and the program stores the input as a string that is added to for each 
            input given by the listeners for these buttons.
            <br><br>
            The clear button removes current value and function input, and the clear all resets the whole equation. 
            The +/- button can be used to change the sign of the input.
            <br><br>
            2: When the user clicks equals or a button for another operation, the program checks if the input is valid, 
            and if it is, it calls the evaluate() method, which applies the necessary operation and displays the output.
            <br><br>

        </p>

        <h4> Some things I could add to this program:</h4>
        <br>

        <p class="paragraphStandard">

            1: Add exponents & roots. This would be similar to using the trig functions, but would check for previous 
            inputs and values.
            <br><br>
            2: Add some type of value restriction. I didn't bother with restricting what values can be put into the calculator, 
            but it might be worth looking into max/min values.
            <br><br>
            3: Add inverse trig functions.
            <br><br>
            4: Add the ability to input fractions, as well as display output as well formatted fractions.
            <br><br>

        </p>

        <h1>
            <a href="https://github.com/mseitzdev/Scientific_Calculator"> 
            See the source or donwload the app on my Github!
            </a>
        </h1>

    </div>

</main>

<?php 
//including footer 
include '../res/footer.php'; 
?>