<?php 
echo"
<div id='wrapper'>
		<div id='form'>
			<form action='save.php?CID=";echo$_GET['ConsultantID'];echo"&FN=";echo$_GET['FirstName'];echo"&LN=";echo$_GET['LastName'];echo"' method='post'>
				<h1>&iexcl;Bienvenida! <h2>$ConsultantID - $FirstName $LastName </h2></h1>
				<h2></h2>
				<h3>Por favor, ingresa el nombre de tu esposo.</h3>
				<table>
					<tr><td class='label'>Nombre:</td>          <td><input class='text' type='text' name='ename' placeholder='Nombre...'></td></tr>
					<tr><td class='label'>Apell&iacute;do Paterno:</td><td><input class='text' type='text' name='eapppa' placeholder='Apell&iacute;do Paterno...'></td></tr>
					<tr><td class='label'>Apell&iacute;do Materno:</td><td><input class='text' type='text' name='eappma' placeholder='Apell&iacute;do Materno...'></td></tr>
				</table>
				<div id='guardar'><input type='submit' value='GUARDAR'></div>
			</form>
		</div>
	
			<div id='signature'>Mary Kay &reg; Inc. 2014</div>
	</div>
";
?>