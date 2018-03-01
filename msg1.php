<?php
	session_start();
	error_reporting(E_ERROR | E_PARSE);

    include('way2sms-api.php');
	$number=$_SESSION['num'];
	sendWay2SMS ( '8762868333' , 'Balufeb9' , $number , 'Thanks for the feedback');
   ?>
   <script>
				
			window.location.href='register.php?success';
			</script>
<?php
    ?>