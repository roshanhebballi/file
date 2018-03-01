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
	

   
$user2=$_POST["hb"];
$user3=$_POST["bp"];
$user4=$_POST["weight"];
$user5=$_POST["urine"];
$user6=$_POST["scan1"];
$user7=$_POST["scan2"];
$user1=$_SESSION['ID'];		



$sql1="INSERT INTO MRECORD(ID,HB,BP,WEIGTH,URINE,scan1,scan2) VALUES('$user1','$user2','$user3','$user4','$user5','$user6','$user7')";
		mysqli_query($con,$sql1);
//$time = "update tbl_uploads set time=NOW()";?>
<script>
			window.location.href='iron.php';
			</script>
			<?php
	?>
	
	


	
	