<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="responsiveform.css">
<link rel="stylesheet" media="screen and (max-width: 1200px) and (min-width: 601px)" href="responsiveform1.css" />
<link rel="stylesheet" media="screen and (max-width: 600px) and (min-width: 351px)" href="responsiveform2.css" />
<link rel="stylesheet" media="screen and (max-width: 350px)" href="responsiveform3.css" />
<script type="text/javascript" src="val.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.ui.min.js'></script>
<script>
function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
    }
    else document.getElementById('ifYes').style.visibility = 'hidden';

}
</script>

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
<form action="c.php" method="post" id="myForm" name="myForm">
<header>
<h2>Iron Tablet Quantity Taken</h2>
</header>
<br>
    <label>3rd Month</label>
    <input type="text" id="month3" name="month3" placeholder="Enter the Value" onblur="monthT3()">

    <label>4th Month</label>
    <input type="text" id="month4" name="month4" placeholder="Enter the Value" onblur="monthT4()">

   <label>5th Month</label>
    <input type="text" id="month5" name="month5" placeholder="Enter the Value" onblur="monthT5()">

  <label>Injection Taken</label>
  <div name="divnew" id="divnew">
   <input type="radio" name="yesno" id="yesCheck" value="yes" onclick="javascript:yesnoCheck();" > YES
  <input type="radio" name="yesno" id="noCheck" value="no" onclick="javascript:yesnoCheck();" checked> NO
</div>

<div id="ifYes" style="visibility:hidden">
  <label>Injection 1st Date</label>
    <input type="date" id="inject1" name="inject1" placeholder="DD/MM/YYYY" onblur="inject1date()">

  <label>Injection 2nd Date</label>
    <input type="date" id="inject2" name="inject2" placeholder="DD/MM/YYYY" onblur="inject2date()">

  <label>Booster Dose</label>
  <div name="divnew" id="divnew">
     <input type="radio" name="bdose" id="bdose" value="yes" checked> YES
     <input type="radio" name="bdose" id="bdose" value="no"> NO
</div>

</div>


  
    <input type="submit" id="submit" name="submit"  value="Submit">
	<center>
</center>
  </form>
</div>
<script type="text/javascript">
    $(function () {
        $("#month4").bind("change keyup",
  function () {      
      if ($("#month4").val() != "")
          $(this).closest("form").find(":submit").removeAttr("disabled");
      else
          $(this).closest("form").find(":submit").attr("disabled", "disabled");      
      });
        });
</script>
</body>


</html>
