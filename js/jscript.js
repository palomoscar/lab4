
		
			function vervalores(){ 
				var sAux="";
				var frm = document.getElementById("registro");
				for (i=0;i<frm.elements.length;i++)
				{ sAux += "NOMBRE: " + frm.elements[i].name + " ";
				  sAux += "VALOR: " + frm.elements[i].value + "\n" ;
				} 
				
				alert(sAux);


			}
			
			    
			function telfvalido(){
				var frm = document.getElementById("registro");
				var aux=new RegExp(/^[9|6][0-9]{8}$/);
				if(!aux.test(frm.elements[5].value)){  
					return false;
				}
				return true;
			}
			function validar(){
			
				var nombre = document.getElementById("nombre").value;
				var apellidos = document.getElementById("apellidos").value;
				var nick = document.getElementById("nick").value;
				var pass = document.getElementById("pass").value;
				var pass2 = document.getElementById("pass2").value;
				var mail = document.getElementById("mail").value;
				var esp = document.getElementById("esp").value;
				var telf = document.getElementById("telf").value;
				var exp = new RegExp("[a-zA-Z]+[0-9]{3}@ikasle.ehu.(es|eus)");
				
				
				if(nombre == "" || apellidos == "" || nick == "" || pass == "" || mail   == "" || esp == "" ){
				   
				   alert("Por favor, rellene todos los campos obligatorios");
					
				}else if (pass != pass2){
				
					alert("Las contraseñas no coinciden, vuelve a escribirlas por favor");
					
				}else if( pass.length < 6 ){
				
					alert("La contraseña introducida es demasiado corta");
				
				
				}else if( !telfvalido() || telf.type != number ){
				
					alert("El numero de telefono no es valido");
				
				}else if ( !exp.test(mail) ){
					
					alert("El email introducido no es valido");
						
				}else{
				
				return true;
				
				}
				
				
			}