<?php


 header('Content-Type: text/html; charset=UTF-8');

//$mysqli = mysqli_connect("mysql.hostinger.es","u204349316_root","gabriel3", "u204349316_users" ) or die(mysql_error());
	$mysqli = mysqli_connect("localhost", "root",'',"usuario") or die (mysql_error());
	/*
		mysql_connect("localhost", "root",'') or die(mysql_error());
		mysql_select_db("usuario") or die(mysql_error());*/

		if (!$mysqli) {
	 
			echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
			exit;
		}

$usuarios = mysqli_query($mysqli, "select * from usuario" );

		echo '<table border=1> <tr> 
		<th> Nombre </th>
		<th> Apellidos </th>
		<th> Nickname </th>
		<th> Password </th>
		<th> Email </th>		
		<th> Telefono </th>
		<th> Sexo </th>
		<th> Especialidad </th>
		</tr>';

			
		while($row = mysql_fetch_array($usuarios)){
			echo '<tr>
					  <td>'.$row['nombre'].'</td>
					  <td>'.$row['apellidos'].'</td>
					  <td>'.$row['nick'].'</td>
					  <td>'.$row['pass'].'</td>
					  <td>'.$row['mail'].'</td>
					  <td>'.$row['telf'].'</td>
					  <td>'.$row['sexo'].'</td>
					  <td>'.$row['esp'].'</td>
				 </tr>';
			
		}
		echo '</table>';
		
		$usuarios->close();
		
		mysqli_close($msqli);
	
?>