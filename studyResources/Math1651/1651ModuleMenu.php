<!--

1651ModuleMenu.php 

This file contains a mini-menu for navigating through the module links
for the 1651 study guide. 

Code based on: https://codepen.io/remilaudanski/pen/gbBGyN,

Credit to user: R. Laudanski, https://codepen.io/remilaudanski

-->

<style>

/*Formatting for the nav holding everything*/
.moduleLinksNav {
  width : 300px; 
  margin-left: auto; 
  margin-right: auto;
  margin-top: 0px;
  margin-bottom: 0px;
}

.menuOverview {
  color: goldenrod;
  cursor : pointer;
  display: block;
}
.menuOverview:hover{
  transition: 0.25s;
  transform: scale(1.2); /* This zooms in */
  color: lightgoldenrodyellow;
  cursor: pointer;
}

/*Formatting for the slide out boxes and their contents*/
.slide {
  clear:both;
  width:100%;
  height:0px;
  overflow: hidden;
  text-align: center;
  transition: height .3s ease;
}
.slide a, li {
  padding : 10px;
  text-decoration: none;
  color: goldenrod;
  transition: 0.25s;
  text-align: center;
  font-weight: bold;
}
.slide a:hover, li:hover{
  transition: 0.25s;
  transform: scale(1.2); /* This zooms in */
  color: lightgoldenrodyellow;
  cursor: pointer;
}

#touch {position: absolute; opacity: 0; height: 0px;}   

/*Slide out menu formatting when menu is open*/ 
#touch:checked + .slide {
	height: 400px;
} 

</style>

<nav class=moduleLinksNav>

  <label for="touch">
  	<span class="menuOverview"> 
  		<h2>Module Menu ▼ </h2> 
  	</span>
  </label>

  <input type="checkbox" id="touch"> 

  <ul class="slide">
    <li><a href="index.php">Overview</a></li>
    <li><a href="module1.php">Module 1 - Vectors </a></li>
    <li><a href="module2.php">Module 2 - Matrices</a></li>
    <li><a href="module3.php">Module 3 - </a></li>
    <li><a href="module4.php">Module 4 - </a></li>
    <li><a href="module5.php">Module 5 - </a></li>
    <li><a href="module6.php">Module 6 - </a></li>
    <li><a href="module7.php">Module 7 - </a></li>
  </ul>

</nav> 