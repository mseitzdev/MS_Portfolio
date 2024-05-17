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
        transform: translateX(-10%);
        /* Prevents image from squishing, auto adjust to screen */
        object-fit: contain;
    }
    .logo:hover{
        transition: 0.3s;
        /* 
        disabled color change on the logo because it's terrible on safari. \
        */
        /* filter: brightness(10) grayscale(100%); */
        transform: translatex(-10%) scale(1.05);
        cursor: pointer;
    }

    /* This is the formatting for our header, at the top of the page. */
    header{
      /* 
      This sets the background color and opacity
      without inheritance issues 
      */
      background-color: rgba(1,1,1,0.9);

      /* The padding-direction css allows for some padding to be inserted around elements*/
      padding-left: 1%;
      padding-right: 1%; 
      padding-bottom: 1px;
      padding-top: 1px;

      /* Setting dimensions */
      width: 100%;
      max-height: 80px;

      /*Toggle for scrollability*/
      position: fixed;

    }

    /*Linking in the main.css style file for non - header portions*/
    <?php include $document_root . '/MS_Portfolio/res/main.css' ; ?>

</style>

<!-- the header section -->
<body>
<header style="display: flex;">

   <!-- menu button --> 
   <?php include $document_root . '/MS_Portfolio/res/menu.php'; ?> 
    
    <!-- website logo / link to home --> 
    <a class="homeLink" href="/MS_Portfolio/index.php"> 
        <img src="/MS_Portfolio/res/msportlogo.png" class="logo"> 
    </a>

</header>



