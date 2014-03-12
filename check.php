<html>
<head>
	<title>Nombre de mi esposo</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<style>
		*{
			margin:0;
			padding:0;
		}
		body{
			font-family:'Roboto',Helvetica;
			background: #fbc9ba; /* Old browsers */
			background: -moz-linear-gradient(-45deg,  #fbc9ba 0%, #ffffff 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#fbc9ba), color-stop(100%,#ffffff)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(-45deg,  #fbc9ba 0%,#ffffff 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(-45deg,  #fbc9ba 0%,#ffffff 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(-45deg,  #fbc9ba 0%,#ffffff 100%); /* IE10+ */
			background: linear-gradient(135deg,  #fbc9ba 0%,#ffffff 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fbc9ba', endColorstr='#ffffff',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
		}
		#wrapper{
			width:100%;
		}
		#form{
			width:750px;
			margin:50px auto;
			-webkit-box-shadow:0px 0px 20px black;
			background-color: white;
			border:5px solid black;
		}
		h1{
			float:left;
			padding: 10px 0px 0px 10px;
			width:200px;
			font-weight: 300;

		}
		h2{
			font-weight: 300;
			padding: 15px;
			
			
			
		}
		h3{
			clear:both;
			width:750px;
			text-align: center;
			padding:20px 0px 10px 0px;
		}
		table{
			width:500px;
			margin:0px auto;
		}
		input.text{
			border:1px solid #aaa;
			height: 30px;
			width:300px;
			margin:5px 0px;
			-webkit-border-radius:10px;
			text-indent: 10px;
			font-family: 'Roboto',Helvetica,sans-serif;
			font-size: 16px;
		}
		input.text:hover,
		input.text:active,
		input.text:focus{
			  border:1px solid #28B73A;
			   outline: 0;
		}

		td.label{
			text-align: right;
			padding-right: 5px;
			font-weight: bold;
		}
		#guardar{
			
			width:450px;
			margin:10px auto;
			text-align: right;
			padding-right: 20px;
			padding-bottom: 20px;
			
		}
		#guardar input{
			width:100px;
			padding:10px 5px;
			border:1px solid white;	
			background-color: #27ae60;
			color:white;
			-webkit-border-radius:10px;

		}

		#guardar input:hover,
		#guardar input:active{
			color:white;
			background-color: #229955;
			cursor:pointer;
		}


		#signature{
			width:100%;
			text-align: center;
			font-size:14px;
			font-family: sans-serif;
			color:#555;
		}
	</style>
</head>

<body>
		<?php 
	$ConsultantID=base64_decode($_GET['ConsultantID']);
	$FirstName   =base64_decode($_GET['FirstName']);
	$LastName    =base64_decode($_GET['LastName']);
	$con = mysqli_connect("127.0.0.1","root","","recnsd2");
	$result = mysqli_query($con,"SELECT * FROM husbandReg WHERE ConsultantID='$ConsultantID'");
		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_row($result);
			include 'bodies/allow.php';	
		}
		else{

			include 'bodies/deny.php';
		
		}
		
	?>
	<div id="advice">
		<p>Su informacion ah sido guardada.</p>
		<a href="#">Continuar</a>
	</div>

</body>
</html>