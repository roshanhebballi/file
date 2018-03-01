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
<form action="b.php" method="post">
<header>
<h2>Medical Record</h2>
</header>
<br>
    <label>HB</label>
    <input type="text" id="hb" name="hb" placeholder="Enter Heart Beat Rate" onblur="heartB()">

    <label>BP</label>
    <input type="text" id="bp" name="bp" placeholder="Enter Blood Pressure" onblur="bloodP()">

    <label>Weight(In Kg)</label>
    <input type="text" id="weight" name="weight" placeholder="Enter Weight" onblur="weightP()">

    <label>Urine Test</label>
	<div name="divnew" id="divnew">
    <input type="radio" name="urine" value="yes" checked> YES
    <input type="radio" name="urine" value="no"> NO
	</div>

    <label>Scanning 1st Date</label>
    <input type="date" id="scan1" name="scan1" placeholder="DD/MM/YYYY" onblur="scan1date()">


    <label>Scanning 2nd Date</label>
    <input type="date" id="scan2" name="scan2" placeholder="DD/MM/YYYY" onblur="scan2date()">


  
    <input type="submit" value="Submit">
	<center>
<a href="register.php" class="previous round" >&#8249;</a>
<a href="medicalrecord.php" class="next round" >&#8250;</a>
</center>
  </form>
</div>

</body>
</html>
