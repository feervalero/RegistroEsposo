<?php 
	$ConsultantID	=$_GET['ConsultantID'];
	$FirstName		=$_GET['FirstName'];
	$LastName		=$_GET['LastName'];
 	echo $ConsultantID. "<br>".$FirstName."<br>".$LastName;
 	header("Location:home.php?ConsultantID=".base64_encode($ConsultantID)."&FirstName=".base64_encode($FirstName)."&LastName=".base64_encode($LastName));
 ?>