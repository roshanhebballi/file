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
	

   
$user1=$_POST['id1'];		
$user2=$_POST['gravida'];
$user3=$_POST['delivery'];
$user4=$_POST['weight'];
$user5=$_POST['mortality'];
$_SESSION['ID1']=$user1;


$sql1="INSERT INTO DELIVERY(ID,GRAVIDA,PLACE,babyWEIGHt,MORTALITY) VALUES('$user1','$user2','$user3','$user4','$user5')";
		mysqli_query($con,$sql1);
//$time = "update tbl_uploads set time=NOW()";
	?>
	<script>
		
			window.location.href='engagement.php';
			</script>
			<?php
			?>
	
	


	
	