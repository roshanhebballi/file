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
$user2=$_POST['clarity'];
$user3=$_POST['useful'];
$user4=$_POST['understand'];
$user5=$_POST['more'];



$sql1="INSERT INTO FEEDBACK(ID,clarity,useful,understand,more) VALUES('$user1','$user2','$user3','$user4','$user5')";
		mysqli_query($con,$sql1);
		
$q="select * from details where id like '$user1'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$_SESSION['num']=$row['contact'];


//$time = "update tbl_uploads set time=NOW()";
	?>
	<script>
			window.location.href='msg1.php';
			</script>
	<?PHP
	?>
	


	
	