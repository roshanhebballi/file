<?php
	session_start();
	error_reporting(E_ERROR | E_PARSE);

    include('way2sms-api.php');
	$u=$_SESSION['ID'];
	$s=$_SESSION['inject1'];
	$s1=$_SESSION['inject2'];
	$number=$_SESSION['num'];
	$g="SUBMITTED SUCCESSFULLY!!!! UR USER ID IS ".$u;
	sendWay2SMS ( '8762868333' , 'Balufeb9' , $number , $g);
   $y="U have 1st injection on ".$s;
	$y1="U have 2nd injection on ".$s1;
	
	sleep(10);
    sendWay2SMS ( '8762868333' , 'Balufeb9' , $number , $y);
	sleep(10);
	sendWay2SMS ( '8762868333' , 'Balufeb9' , $number , $y1);
	
	?>
	<script>
				
			window.location.href='register.php?success';
			</script>
<?php
    ?>