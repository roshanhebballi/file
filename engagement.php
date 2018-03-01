<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="val.js"></script>
  <title>Engagement</title>
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
  <link rel="stylesheet" type="text/css" href="responsiveform.css">
<link rel="stylesheet" media="screen and (max-width: 1200px) and (min-width: 601px)" href="responsiveform1.css" />
<link rel="stylesheet" media="screen and (max-width: 600px) and (min-width: 351px)" href="responsiveform2.css" />
<link rel="stylesheet" media="screen and (max-width: 350px)" href="responsiveform3.css" />
</head>
<body>
<ul class="topnav">
  <li><a class="active" href="register.php">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
   <li><a href="#contact">About</a></li>
  <li class="right"><a href="#about">Logout</a></li>
</ul>
<div id="envelope">
<form action="e.php" method="post">
<header>
<h2>Engagement</h2>
</header>
<br>
      <label>Topic:</label>
      <input type="text" name="cat"  id="cat[]" autocomplete="off" list="topic"/>
      <datalist id="topic">
        <option value="Registration with Anganwadi and Asha">
        <option value="Importance of 3 ANC Checkups">
        <option value="TT Injection">
        <option value="Iron Tablets">
        <option value="Nutritious Food">
        <option value="Do's and Don’ts">
        <option value="High Risk Pregnancy">
        <option value="Preparation for Delivery">
        <option value="Institutional Delivery">
        <option value="Signs of Danger Post Delivery">
        <option value="New Born Care">
      </datalist>

		
      <label>High Risk:</label>
	  <div name="divnew" id="divnew">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="hrisk" id="hrisk" value="yes" checked> YES
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="hrisk" id="hrisk" value="no"> NO
		</div>
		
      <label>Criteria:</label>
	  <div name="divnew" id="divnew">
        <input type="radio" name="criteria" id="criteria" value="Below 40KG" checked> Below 40KG &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="criteria" id="criteria" value="BP Below 100/60"> BP Below 100/60 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="criteria" id="criteria" value="BP Above 140/100"> BP Above 140/100
        &nbsp;&nbsp;&nbsp;<input type="radio" name="criteria" id="criteria" value="HB Below 8"> HB Below 8
		</div>
      <label>If any other Symptoms:</label>
      <textarea name="other" id="other" rows="3" cols="10" >
      </textarea>
      <label>Date of Visit:</label>
      <input type="date" name="date" id="date" PLACEHOLDER=" DD/MM/YYYY" onblur=""/>
      <br>
      <label>Time of Visit:</label>
      <input type="time" name="time" id="time" onblur=""/>

      <label>Time spent:</label>
	  <div name="divnew" id="divnew">
       <input type="radio" name="timespent" id="timespent" value="15min" checked> 15min
        <input type="radio" name="timespent" id="timespent" value="15-30min"> 15-30min 
        <input type="radio" name="timespent" id="timespent" value="30-45min"> 30-45min   
		</div>
   <input type="submit" value="Submit">
	<center>
</center>
   </div>
  </form>
  
</div>
</body>
</html>