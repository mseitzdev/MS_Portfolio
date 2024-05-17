<!-- 

menu.php

This page holds the code for the menu and navigation system of our website.

The code for this page is a mish-mash of code that I have created myself, and the 
side menus given on w3 schools, sources here: 

1: https://www.w3schools.com/howto/howto_js_sidenav.asp
2: https://www.w3schools.com/howto/howto_js_dropdown_sidenav.asp

created by Mitchell Seitz, using above material, in march 2024.

 -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

/* This is the general formatting for the sidenav */
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  overflow-x: hidden;
  transition: 0.3s;
  padding-top: 60px;
  font-size: 25px;

  /* 
  Opacity and background color, 
  but opacity is inherited into the 
  links and dropdowns. 
  */
  /*
  background-color: #111;
  opacity: 0.90;
  */

  /* 
  This sets the background color and opacity
  without inheritance issues 
  */
  background-color: rgba(1,1,1,0.9);
}

/*General formatting for links and dropdown buttons*/
.sidenav a, .dropdown-btn {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  color: goldenrod;
  display: block;
  transition: 0.3s;
  text-align: center;

}

/* Style the  dropdown button */
 .dropdown-btn {
  border: none;
  background: none;
  width:100%;
  cursor: pointer;
  outline: none;
  font-weight: bold;
  font-size: 25px;
}

/* link and dropdown button hover behavior */
.sidenav a:hover, .dropdown-btn:hover{
  transform: scale(1.2); /* This zooms in */
  filter: brightness(1.25) grayscale(100%);
  cursor: pointer;
}

/* Dropdown container*/
.dropdown-container {
  display: none;
  position: relative;
}

/* Giving the dropdown elements different styling*/
.dropdown-element{
  font-size: 20px;
  color: gold;
}

/* close button formatting */
.closebtn {
  position: absolute;
  top: 0;
  right: 20px;
  font-size: 36px;
  margin-left: 50px;
}

/* menuclick when not hovered on */
.menuClick{
  color: goldenrod;
  float: left;
  cursor:pointer;
  margin: 0px;
}

/*Menu hover behavior*/
.menuClick:hover{
  transition: 0.3s;
  transform: scale(1.2); /* This zooms in */
  filter: brightness(1.25) grayscale(100%);
  cursor: pointer;
}

/* more general formatting */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


</style>
</head>

<div id="mySidenav" class="sidenav">

  <!-- This is the close button -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <!-- This is the home button, which will show the home content. -->
  <a href="/MS_portfolio/index.php">Home</a>

  <button class="dropdown-btn">Android Apps ▼</button>
  <div class="dropdown-container">
      <a href="/MS_portfolio/androidApps/busSimulator.php" class="dropdown-element">Transit System Simulator</a> 
      <a href="/MS_portfolio/androidApps/androidCalc.php" class="dropdown-element">Scientific Calculator</a> 
  </div>

  <button class="dropdown-btn">Website Prototypes ▼</button>
  <div class="dropdown-container">
      
  </div>
  
</div>

<!-- This is the code for the menu symbol, you can add text  -->
<span onclick="openNav()" class="menuClick"> &#9776; </span>

<script>
function openNav() {
  //alter this width to change the width of the sidenav when open
  document.getElementById("mySidenav").style.width = "400px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

/* 
Loop through all dropdown buttons to toggle between hiding and showing its dropdown content

This allows  multiple dropdowns without any conflict 
*/
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>