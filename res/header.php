<?php 

/*
  Header for the program. Forces secure connection. 

  Programmed by Mitchell Seitz, 2024
*/

// make sure the page uses a secure connection - Forces secure connection on all pages, as header is included everywhere. 
$https = filter_input(INPUT_SERVER, 'HTTPS'); 
if (!$https) {
    $host = filter_input(INPUT_SERVER, 'HTTP_HOST'); 
    $uri = filter_input(INPUT_SERVER, 'REQUEST_URI'); 
    $url = 'https://' . $host . $uri; header("Location: " . $url); 
    exit();
} 

//getting the document root - NOTE -> The php docuemnt root appears to be different from the HTML document root? 
$document_root = $_SERVER['DOCUMENT_ROOT'];

//test code, enable when lining up filesystem.
/*
echo $document_root;
*/

?>

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>

    <title> Mitchell Seitz Portfolio</title>

    <style>
        /*Linking in the main.css style file for non - header portions*/
        <?php include $document_root . '/res/main.css' ; ?>
    </style>

</head>

<!-- starting the body -->
<body>

<!-- the header section -->
<header style="display: flex;">

   <!-- menu button --> 
   <?php include $document_root . '/res/menu.php'; ?> 
    
    <!-- Div to surround the logo and link -->
    <div class="homeLogo"> 
        <!-- website logo inside link to home -->
        <a href="/index.php"> 
            <img src="/res/msportlogo.png" class="logo"> 
        </a>
    </div>

</header>

<!-- bringing particles effect in -->
<div id="particles-js"> </div>
<script type="text/javascript" src="/res/particles/particles.js"></script>
<script type="text/javascript" src="/res/particles/app.js"></script>
