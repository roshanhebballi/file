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
<form action="d.php" method="post">
<header>
<h2>Delivery Details</h2>
</header>
<br>
  <form action="d.php">
  <label>Id</label>
	<input type="text" name="id1"  >
    
  
    <label>Gravida</label>
	<div name="divnew" id="divnew">
    <input type="radio" name="gravida" id="gravida" value="home" checked> 1
    <input type="radio" name="gravida" id="gravida" value="hospital"> 2
    <input type="radio" name="gravida" id="gravida" value="home" > 3
    <input type="radio" name="gravida" id="gravida" value="hospital"> 4
	</div>

    <label> Place Of Delivery</label><div name="divnew" id="divnew">
    <input type="radio" name="delivery" id="delivery" value="home" checked> HOME
    <input type="radio" name="delivery" id="delivery" value="hospital"> HOSPITAL
	</div>

    <label>Baby Weight(In KGs)</label>
    <input type="text" id="weight" name="weight" placeholder="Enter Baby Weight" onblur="">

    <label>Mortality</label>
	<div name="divnew" id="divnew">
    
    <input type="radio" name="mortality" id="mortality" value="mother"> MOTHER
    <input type="radio" name="mortality" id="mortality" value="child" > CHILD
	<input type="radio" name="mortality" id="mortality" value="none" checked> NONE
	</div>
    <input type="submit" value="Submit">
	<center>
</center>

  </form>
</div>

</body>
</html>
