<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="responsiveform.css">
<link rel="stylesheet" media="screen and (max-width: 1200px) and (min-width: 601px)" href="responsiveform1.css" />
<link rel="stylesheet" media="screen and (max-width: 600px) and (min-width: 351px)" href="responsiveform2.css" />
<link rel="stylesheet" media="screen and (max-width: 350px)" href="responsiveform3.css" />
<script type="text/javascript" src="val.js"></script>
<style>
body {margin: 0;}

ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px){
    ul.topnav li.right, 
    ul.topnav li {float: none;}
}
</style>
<style>
a {
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
}

a:hover {
    background-color: #ddd;
    color: black;
}

.previous {
    background-color: #f1f1f1;
    color: black;
}

.next {
    background-color: #4CAF50;
    color: white;
}

.round {
    border-radius: 50%;
}
</style>
<body>
<ul class="topnav">
  <li><a class="active" href="register.php">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
   <li><a href="#contact">About</a></li>
  <li class="right"><a href="#about">Logout</a></li>
</ul>
<div id="envelope">
<form action="f.php" method="post">
<header>
<h2>Pregnant Women Feedback</h2>
</header>
<br>
    <label>Clarity of Information</label>
	<div name="divnew" id="divnew">
    <input type="radio" name="clarity" id="clarity" value="1" checked> 1
    <input type="radio" name="clarity" id="clarity" value="2"> 2
    <input type="radio" name="clarity" id="clarity" value="3" > 3
    <input type="radio" name="clarity" id="clarity" value="4"> 4
    <input type="radio" name="clarity" id="clarity" value="5"> 5
	</div>
	
    <label> Usefullness</label>
	<div name="divnew" id="divnew">
    <input type="radio" name="useful" id="useful" value="1" checked> 1
    <input type="radio" name="useful" id="useful" value="2"> 2
    <input type="radio" name="useful" id="useful" value="3" > 3
    <input type="radio" name="useful" id="useful" value="4"> 4
    <input type="radio" name="useful" id="useful" value="5"> 5
	</div>

    <label>Understanding</label>
	<div name="divnew" id="divnew">
    <input type="radio" name="understand" id="understand" value="1" checked> 1
    <input type="radio" name="understand" id="understand" value="2"> 2
    <input type="radio" name="understand" id="understand" value="3" > 3
    <input type="radio" name="understand" id="understand" value="4"> 4
    <input type="radio" name="understand" id="understand" value="5"> 5
	</div>
	
    <label>Do you want to know more about this topic?</label>
	<div name="divnew" id="divnew">
    <input type="radio" name="more" id="more" value="yes" checked> YES
    <input type="radio" name="more" id="more" value="no"> NO
	</div>

    <input type="submit" value="Submit">
	<center>
</center>
  </form>
</div>

</body>
</html>
