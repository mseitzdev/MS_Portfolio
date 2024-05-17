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

//test code, enable as needed.
/*
echo $document_root;
*/

?>

<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title> Mitch Seitz Portfolio</title>
</head>


<style>

    /*CSS style for the logo/link */
    .homeLink{
        /* 
        Maxes out the link dimensions 
        to allow the logo css to work 
        */
        width: 100%;
        height: 100%;
    }

    .logo{
        /* Adjusting width, height, and position on screen */
        max-width: 70%; 
        width: auto; 
        height: 80px;
        transform: translateX(-7.5%);
        /* Prevents image from squishing, auto adjust to screen */
        object-fit: contain;
    }

    .logo:hover{
        transition: 0.3s;
        filter: brightness(130%);
        transform: translatex(-7.5%) scale(1.1);
        cursor: pointer;
    }

    /* This is the formatting for our header, at the top of the page. */
    header{
      /* background-color sets the color of the background around the text*/
      background-color: black;
      /* The padding-direction css allows for some padding to be inserted around elements*/
      padding-left: 1%;
      padding-right: 1%; 
      padding-bottom: 10px;
      padding-top: 10px;
      /* This makes our header take up the whole width of the screen */
      width: 100%;
      max-height: 80px;
    }

    /*Linking in the main.css style file for non - header portions*/
    <?php include $document_root . '/MS_Portfolio/res/main.css' ; ?>

</style>

<!-- the header section -->
<body>
<header style="display: flex;">

   <!-- menu button --> 
    <h1 style="font-size: 50px; margin-top: auto; margin-bottom: auto; "> 
        <?php include $document_root . '/MS_Portfolio/res/menu.php'; ?> 
    </h1>
        
    <!-- website logo / link to home --> 
    <a class="homeLink" href="/MS_Portfolio/index.php"> 
        <img src="/MS_Portfolio/res/msportlogo.png" class="logo"> 
    </a>

</header>



