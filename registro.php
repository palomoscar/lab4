<?php
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$nick = $_POST['nick'];
		$pass = $_POST['pass'];
		$mail = $_POST['mail'];
		$telf = $_POST['telf'];
		$sexo = $_POST['sexo'];
		$esp = $_POST['esp'];
		
		$conexion = mysqli_connect("localhost","root",'',"usuario") or die( mysql_error() );
		
		if(!$conexion){
			
		echo "Fallo al conectar con MySQL : " . $conexion->connect_error;
		
		}

		function comprobarCorreo(){
			
			$patron_mail = "[a-zA-Z]+[0-9]{3}@ikasle.ehu.(es|eus)";	
			
			return preg_match($patron_mail,$mail);
		}	
	
	
	
		if( comprobarCorreo() === false){
		
			echo "El correo utilizado no es valido";
		
			echo "<p> <a href='formulario.html'> Volver al registro </a>";
		
		}else{
			 $sql = "INSERT INTO usuario(Nombre,Apellidos,Nickname,Clave,Email,Telefono,Especialidad) VALUES('$nombre','$apellidos','$nick','$pass','$mail',$telf,'$esp')";
	
				if (!mysqli_query($conexion ,$sql)){
		
				die('Error al escribir en la Base de Datos: ' . mysql_error());
				}
	
		echo "¡Usuario registrado con exito!";
		
		echo "<p> <a href='VerUsuarios.php'> VER USUARIOS </a>";
		
		mysqli_close($conexion);
		
	}
	
	/*otras de las cosas que hemos probado...
	
	/////////////////////////////////COMPROBACIONES LADO SERVIDOR/////////////////////////////////////
	
	function comprobarDatos()
	{
		$okay = true;
		
		//$patron_mail = "/^([a-z][a-z]*)[0-9]{3}@ikasle.ehu.(es|eus)$/";
		$patron_mail = "[a-zA-Z]+[0-9]{3}@ikasle.ehu.(es|eus)";	
		$patron_telf = "/^[0-9]{9}/";
		$patron_apellidos = "/([a-zA-Z][a-zA-Z]*) ([a-zA-Z][a-zA-Z]*)/";
		
		return preg_match($patron_mail,$_POST['mail']);
		/*
		if( !filter_var($_POST['mail'], FILTER_VALIDATE_REGEXP, array("options" =>array('regexp'=> $patron_mail) ) ) ){
			
			$okay=false;
			echo "<p><a id='parUsers'>Email con formato incorrecto</a>";
			
		}if( !filter_var($_POST['telf'], FILTER_VALIDATE_REGEXP, array("options" =>array('regexp'=> $patron_telf) ) ) ){
			
			$okay=false;
			echo "<p><a id='parUsers'>Tel&eacutefono con formato incorrecto</a>"; 	
			
		}if( !filter_var($_POST['apellidos'], FILTER_VALIDATE_REGEXP, array("options" =>array('regexp'=> $patron_apellidos) ) ) ){
			
			$okay=false;
			echo "<p><a id='parUsers' >Escribe tus dos apellidos</a> ";	
		}
		
		//Si no sigue la expresion regular-->
		
			
		return $okay;
		
		$patter_email = "[a-zA-Z]+[0-9]{3}@ikasle.ehu.(es|eus)";
		$email_ok = filter_var($_POST['mail'], FILTER_VALIDATE_REGEXP, array("options" =>array('regexp'=> $patron_mail) ) );
		
		if($email_ok===false){
			?>
			<p id="parUsers">Email con formato incorrecto</p>
			<?php
		}
		}
	
		function comprobarPass()
	{
		$okay = true;
		
		if(strlen($_POST['pass']) < 6 || $_POST['pass'] != $_POST['pass2'] )
		{
			$okay = false;
			
			echo "esto lo omitimoooooos";
			
			echo "<p><a id='parUsers'>Revisa las contraseñas, tu contraseña debe tener al menos 6 caracteres</a> ";
			
			
		}
		
		return $okay;
	}
	*/




/////////////////////////////AHORA LAS LINEAS QUE SE EJECUTARAN///////////////
	
	/*
	
	//conexion remota
	//$conexion = mysqli_connect("mysql.hostinger.es","u204349316_root","gabriel3","u204349316_users") or die( mysql_error() );
		
	//conexion locale_get_defaul
	 $conexion = mysqli_connect("localhost","root",'',"usuario") or die( mysql_error() );
		
 
	if(!$conexion){
		echo "Fallo al conectar con MySQL : " . $conexion->connect_error;
		exit;
	}
	
	
	$errores = 0;
	
	if(comprobarDatos() === false){
		echo "trazaaaaa";
		$errores++;}
	if(comprobarPass() === false)
		$errores++;
		
	if($errores > 0)
	{
			echo "<p><a id='linkreg' href='localhost/Quiz/formulario.html'>Volver al registro</a></p>";
			 
		
	}else
	{
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$nick = $_POST['nick'];
		$pass = $_POST['pass'];
		$mail = $_POST['mail'];
		$telf = $_POST['telf'];
		$sexo = $_POST['sexo'];
		$esp = $_POST['esp'];
		
		
        $sql = "INSERT INTO usuario(Nombre,Apellidos,Nickname,Clave,Email,Telefono,Especialidad) VALUES('$nombre','$apellidos','$nick','$pass','$mail',$telf,'$esp')";
	
	if (!mysqli_query($conexion ,$sql)){
		
		die('Error al escribir en la Base de Datos: ' . mysql_error());
	}
	
	echo "¡Usuario registrado con exito!";
	echo "<p> <a href='VerUsuarios.php'> VER USUARIOS </a>";
	mysqli_close($conexion);//ahora cerramos la conexion
	
	}
	*/
	?>