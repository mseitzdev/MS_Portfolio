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
        <?php include $document_root . '/MS_Portfolio/res/main.css' ; ?>
    </style>

</head>

<!-- starting the body -->
<body>

<!-- the header section -->
<header style="display: flex;">

   <!-- menu button --> 
   <?php include $document_root . '/MS_Portfolio/res/menu.php'; ?> 
    
    <!-- website logo / link to home --> 
    <a class="homeLink" href="/MS_Portfolio/index.php"> 
        <img src="/MS_Portfolio/res/msportlogo.png" class="logo"> 
    </a>

</header>

<!-- bringing particles effect in -->
<div id="particles-js"> </div>
<script type="text/javascript" src="/MS_Portfolio/res/particles/particles.js"></script>
<script type="text/javascript" src="/MS_Portfolio/res/particles/app.js"></script>
