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
	

   
		
$user2=$_POST['pname'];
$user3=$_POST['hname'];
$user4=$_POST['kyc'];
$user5=$_POST['dod'];
$user6=$_POST['age'];
$user7=$_POST['contact'];
$user8=$_POST['image'];
$user9=$_POST['taluka'];
$user10=$_POST['cluster'];
$user11=$_POST['village'];

$sql="INSERT INTO details(FNAME,HNAME,KYC,DOD,AGE,CONTACT,IMAGE,TALUKA,CLUSTER,VILLAGE) VALUES('$user2','$user3','$user4','$user5','$user6','$user7','$user8','$user9','$user10','$user11')";
		mysqli_query($con,$sql);
$sql1="select id from details";
$result_set=mysqli_query($con,$sql1);
while($row=mysqli_fetch_array($result_set))
	{
		?>
		<?php $z= $row['id'] ?>
	
<?php
	}
	
	$_SESSION['ID']=$z;
	?>
<script>
				
			window.location.href='medicalrecord.php';
			</script>
		<?	php
//$time = "update tbl_uploads set time=NOW()";
	?>
	
	


	
	