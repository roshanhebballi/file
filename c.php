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
	

   
$user1=$_SESSION['ID'];
$user2=$_POST['month3'];
$user3=$_POST['month4'];
$user4=$_POST['month5'];
$user5=$_POST['inject'];
$user6=$_POST['inject1'];
$user7=$_POST['inject2'];
$user8=$_POST['bdose'];


$sql1="INSERT INTO ITABLET(ID,3MONTH,4MONTH,5MONTH,INJECT,INJECT1,INJECT2,BDOSE) VALUES('$user1','$user2','$user3','$user4','$user5','$user6','$user7','$user8')";
		mysqli_query($con,$sql1);
//$time = "update tbl_uploads set time=NOW()";
	
	


	
		$q="select * from details where id like '$user1'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$_SESSION['num']=$row['contact'];
$q1="select * from itablet where id like '$user1'";
$result1=mysqli_query($con,$q1);
$row1=mysqli_fetch_array($result1);
$_SESSION['inject1']=$row1['inject1'];
$_SESSION['inject2']=$row1['inject2'];
echo "YOU HAVE SUCCESSFULLY SUBMIITTED THE DETAILS!!!!!!!!!! UR USER IS IS ".$user1;
//$time = "update tbl_uploads set time=NOW()";
	?>
	<script>
			window.location.href='msg.php';
			</script>
	<?PHP
	?>
