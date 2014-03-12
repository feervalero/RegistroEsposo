<?php 
	
	$ConsultantID=base64_decode($_GET['CID']);
	$FirstName   =base64_decode($_GET['FN']);
	$LastName    =base64_decode($_GET['LN']);
	
	$ename = strtolower($_POST['ename']);
	$eapppa = strtolower($_POST['eapppa']);
	$eappma =strtolower($_POST['eappma']);
	
	$ename = ucfirst($ename);
	$eapppa = ucfirst($eapppa);
	$eappma =ucfirst($eappma);

	echo $ename.$eappma.$eapppa;



		$con = mysqli_connect("127.0.0.1","root","","recnsd2");
		mysqli_query($con,"SET NAMES 'utf8'");
		mysqli_query($con,"INSERT INTO husbandReg (ConsultantID,ConsultantFirstName,ConsultantLastName,HusbandFirstName,HusbandSecondName,HusbandThirdName) 
			VALUES('$ConsultantID','$FirstName','$LastName','$ename','$eapppa','$eappma')");
		header("Location:home.php?ConsultantID=".base64_encode($ConsultantID)."&FirstName=".base64_encode($FirstName)."&LastName=".base64_encode($LastName));
	 ?>