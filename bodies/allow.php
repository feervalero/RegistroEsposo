<?php 
	$ConsultantID=base64_decode($_GET['ConsultantID']);
	$FirstName   =base64_decode($_GET['FirstName']);
	$LastName    =base64_decode($_GET['LastName']);
echo"
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/> 
<div id='wrapper'>
		<div id='form'>
			<form action='#!'>
				<h1>&iexcl;Bienvenida! <h2>$row[1] - $row[2] $row[3]</h2></h1>
				<h2></h2>
				<h3>Tu informaci&oacute;n ya ha sido registrada.</h3>
				<table>
					<tr><td class='label'>Nombre:</td>          <td><input class='text' value='$row[4]' type='text' placeholder='Nombre...' readonly></td></tr>
					<tr><td class='label'>Apellido Paterno:</td><td><input class='text' value='$row[5]' type='text' placeholder='Apellido Paterno...' readonly></td></tr>
					<tr><td class='label'>Apellido Materno:</td><td><input class='text' value='";echo $row[6]; echo"' type='text' placeholder='Apellido Materno...' readonly></td></tr>
				</table>
				<div id='guardar'><input type='submit' value='GUARDAR' disabled style='background-color:#333;'></div>
			</form>
		</div>
	
			<div id='signature'>Mary Kay &reg; Inc. 2014</div>
	</div>
";
?>
<style type="text/css">
	.text{
		color:#555;
	}
	input.text:hover,
		input.text:active,
		input.text:focus{
			  border:1px solid #aaa;
			   outline: 0;
		}
	#guardar input:hover{
		cursor:default;
	}
</style>