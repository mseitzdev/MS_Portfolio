<!-- 

Index.php , the main file for my portfolio. 

Programmed by Mitchell Seitz, March 6 2024. 

This file will selectively display other files 
containing contents of the website, as well as 
handle processing of user input and function 
calls.

-->

<?php 


//inclding program header, forces secure connection.
include 'res/header.php'; 

?>

<main class="information">
    
    <!-- Home page -->
    <h1 class="pagetitle">Welcome to my portfolio!</h1><br>
    <p >
        This website is a final project for COMP 3541 at Thomspon Rivers University, and is inteded to represent a store catering to computer science 
        students. The products on this website are, mostly, not real, and are not intended to be taken seriously. 
    <br><br>
        This store does not process actual 
        orders or payment, and instead is a simulaiton of a store. The user accounts and orders are stored in the database and presented as if they 
        are real, but the orders do not process any real payment and are intended to be representations of orders rather than real orders. 
    <br><br>
    </p>

</main>

<?php 
//including footer 
include 'res/footer.php'; 
?>