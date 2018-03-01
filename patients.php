<!DOCTYPE html>
<html>
<head>
<title>Patient Details</title>
<!-----Including CSS for different screen sizes----->
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
<form action="a.php" method="post">
<header>
<h2>Patient Details</h2>
</header>
<br>
<label>Full Name:</label>
<input name="pname" id="pname" placeholder="Enter Patient Name" type="text" width="100px;" onblur="fullName()">
<label>Husband Name:</label>
<input name="hname" id="hname" placeholder="Enter Husband Name" type="text" onblur="husbandName()">
<label>KYC Image</label>
<input type="button" onclick="window.open('img.php')" value="Click Me to Take Image" ></input>
<input type="file" name="kyc" accept="image/*">
<label>Expected Date of Delivery:</label>
<input name="dod" id="dod" placeholder="DD/MM/YYYY" type="date" onblur="datedod()">
<label>Age</label>
<input name="age" id="age" placeholder="Enter Age" type="text" onblur="valAge()">
<label>Mobile Number</label>
<input name="contact" id="contact" placeholder="Enter Mobile Number" type="text" onblur="valMob()">
<label>Patient Image</label>
<input type="button" onclick="window.open('img.php')" value="Click Me to Take Image" ></input>
<input type="file" name="image" accept="image/*">
<label>Taluka</label>
<input list="taluka" name="taluka">
  <datalist id="taluka">
    <option value="Gadag">
    <option value="Shirahatti">
    <option value="Mundaragi">
  </datalist>
<label>Cluster</label>
<input list="cluster" name="cluster">
  <datalist id="cluster">
    <option value="Huilagola">
    <option value="Hulkoti">
    <option value="Lakkundi">
    <option value="Harti">
    <option value="Soratur">
    <option value="Bhagewadi">
    <option value="Korlahalli">
    <option value="Petalu">
    <option value="Dambala">
    <option value="Adralli">
    <option value="Suranagi">
	<option value="Chabbi">
    <option value="Magadi">
    <option value="Machanahalli">
  </datalist>
<label>Village</label>
<input list="village" name="village">
  <datalist id="village">
    <option value="Hirekoppa">
    <option value="Nagasamudra">
    <option value="Kiratageri">
    <option value="Huilagola">
    <option value="Chikoppa">
    <option value="Kadadi">
    <option value="Balaganur">
    <option value="Ghawarvada">
    <option value="Benakoppa">
    <option value="Niralagi">    
	<option value="Kotamuchugi">
    <option value="Narayanapur">
    <option value="Hulkoti">
    <option value="Hombala">
    <option value="Shagoti">
    <option value="Madaganur">
    <option value="Belahod">
    <option value="Chikkahandigola">
    <option value="Dundoor">
    <option value="Hirehandigola">
	<option value="Hosalli">
    <option value="Lingadala">
    <option value="Venkatapur">
    <option value="Lakkundi">
    <option value="Sambapur">
    <option value="Adavisomapur">
    <option value="Hatalgeri">
    <option value="Timmapur">
    <option value="Haralapur">    
	<option value="Hallikeri">
    <option value="Halligudi">
    <option value="Narasapur">
    <option value="Kanaginahala">
    <option value="Harti">
    <option value="Chinchali">
    <option value="Kanavi">
    <option value="Hosur">
    <option value="AnturBentur">
    <option value="Nilgunda">
	<option value="Kallur">
    <option value="Malasamudra">
    <option value="Asundi">
    <option value="Binkadakatti">
    <option value="Kurthakoti">
    <option value="Shirunja">
    <option value="Yalishirunja">
    <option value="Soratur">
    <option value="Nagavi">    
	<option value="Malingapura">
    <option value="Hanganakatti">
    <option value="KabaLadalatti">
    <option value="Nabhapur">
    <option value="Beladadi">
    <option value="Shirola">
    <option value="Kalasapur">
    <option value="Bhagewadi">
    <option value="Chikvaddatti">
    <option value="Murudi">
	<option value="Mallikarjunpur">
    <option value="GuddadBudhihal">
    <option value="Bidaralli">
    <option value="Mundawad">
    <option value="Jaalawadagi">
    <option value="Harogeri">
    <option value="Basapur">
    <option value="Vitalapur">
    <option value="Hammigi">    
	<option value="Bidanal">
    <option value="Singatalur">
    <option value="Maktampur">
    <option value="Korlahalli">
    <option value="Bennihalli">
    <option value="Gangapur">
    <option value="Shiranahalli">
    <option value="Gummagola">
    <option value="Nagarhalli">
    <option value="Hesarur">
	<option value="Kakkur">
  </datalist>
<input id="submit" type="submit" value="Submit">
</form>
</div>
</body>
</html>