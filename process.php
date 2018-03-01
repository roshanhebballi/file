<!-- VERIFICATION OF USER -->
<?php
?>
<head>
	<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
</head>
<?php
	session_start();
	$con=mysqli_connect("localhost","root","","developthan");						//SELECT AND CONNECTION TO THE DATABASE
	mysqli_select_db($con,"developthan");

	$username=$_POST["user"];					//FETCHING  THE CREDENTIALS
	$password=$_POST["pass"];
	error_reporting(E_ERROR | E_PARSE);

		if((strcmp($username,"admin") and strcmp($password,"admin"))==0){
			?>
			<script type="text/javascript">alert("LOGIN SUCCESSFUL")</script>
			<?php
			include_once "register.php";
		}else{
			?>
			<script type="text/javascript">alert("LOGIN UNSUCCESSFUL")</script>
			<?php
			include_once "index.html";
		}
?>