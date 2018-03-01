<?php
	sleep(1);
?>

<!-- FILE UPLOAD TO SERVER-->
<head>
		<!-- STYLESHEETS -->
		<link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
</head>	
<script type="text/javascript">
	$(document).ready(function(){
		$("#costumModal9").modal('show');
	});
</script>


		<link rel="stylesheet" href="css/modalstyle.css">
<?php
session_start();
error_reporting(E_ERROR | E_PARSE);

include_once 'conn.php';
	

   
$user1=$_SESSION['ID1'];		
$user2=$_POST['cat'];
$user3=$_POST['hrisk'];
$user4=$_POST['criteria'];
$user5=$_POST['other'];
$user6=$_POST['date'];
$user7=$_POST['time'];
$user8=$_POST['timespent'];
echo $user2;
echo $user3;
echo $user4;
echo $user5;
echo $user6;
echo $user7;


$sql1="INSERT INTO ENGAGEMENT(ID,TOPIC,HRISK,CRITERIA,OTHER,DATE,TIME,TIMESPENT) VALUES('$user1','$user2','$user3','$user4','$user5','$user6','$user7','$user8')";
		mysqli_query($con,$sql1);
//$time = "update tbl_uploads set time=NOW()";
	?>
	<script>
			window.location.href='feedback.php';
			</script>
			<?php
			?>
	
	


	
	