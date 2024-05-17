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

<!-- Linking in the main CSS file to our program. -->
<style>
    <?php include $document_root . '/MS_Portfolio/res/main.css' ; ?>
</style>

<!-- the header section -->
<body>
<header style="display: flex; margin: 0px;">

   <!-- menu button --> 
    <h1 style="font-size: 60px; color: goldenrod; 
               margin-top: auto; margin-bottom: auto;"> 
        <?php include $document_root . '/MS_Portfolio/res/menu.php'; ?> 
    </h1>
        

    <!-- website logo --> 
    <img src="/MS_Portfolio/res/msportlogo.png" 
         style="max-width: 70%; max-height: 80px; 
                width: auto; height: auto;
                margin-left: auto; margin-right: auto; 
                object-fit: contain;
                transform: translateX(-10%);">

</header>



