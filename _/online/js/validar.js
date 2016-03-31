function ValidarCorreo()

   { 

    var pos1, pos2, bOk = true; 

	var rpta;

    var sDir = document.fcontacto.email.value; 

	rpta ='1';

    if (sDir == ""){ 

     alert("Porfavor, ingrese la direccion de correo electronico"); 

     document.fcontacto.email.focus(); 

	 rpta = '-1';

     return rpta; 

    } 

    pos1 = sDir.indexOf('@', 0); 

    pos2 = sDir.indexOf('.', 0); 

    bOk = bOk && (pos1 > 0); 

    bOk = bOk && (pos2 != -1); 

    bOk = bOk && (pos1 < pos2 - 1); 

    bOk = bOk && (pos2 < sDir.length - 1); 

    if (!bOk){ 

     alert("Porfavor, ingrese una direccion de correo valida"); 

     document.fcontacto.email.focus(); 

	 rpta ='-1';

	 }

     return rpta; 



   } 



	function numerico(numero){

  		cad = numero.toString();

  		for (var i=0; i<cad.length; i++) {

   			var caracter = cad.charAt(i);

			if (caracter<"0" || caracter>"9")

	 		return false;

  		}

  		return true;

	}	

	

	function letras(cadena){

		//char caracter;

  		cad = cadena.toString();

  		for (var i=0; i<cad.length; i++) {

   			var caracter = cad.charAt(i);

			if ((caracter >='A' && caracter <='Z')  || (caracter >='a' && caracter <='z'))

	 		return true;

  		}

  		return false;

	}



function validar_contactenos() {

  var estado = 1;

  	

	   if ( document.fcontacto.datos.value== '' && estado == 1) {

        alert("Porfavor, ingrese su Nombre(s) y Apellidos")

        estado = -1;

        document.fcontacto.datos.focus();

      }



      if (estado == 1)

		{		estado = ValidarCorreo();}

		

	    if ( document.fcontacto.telefono.value== '' && estado == 1) {

        alert("Porfavor, ingrese su Telefono")

        estado = -1;

        document.fcontacto.telefono.focus();

      }



	

	   if ( document.fcontacto.mensaje.value== '' && estado == 1) {

        alert("Porfavor, ingrese el Mensaje")

        estado = -1;

        document.fcontacto.mensaje.focus();

		}

  	

	

	  if (estado== 1) {

	 document.fcontacto.submit()

	        }

}



//---------------



function validar_pago() {

  var estado = 1;

  	



	   if ( document.fcontacto.datos.value== '' && estado == 1) {

        alert("Porfavor, ingrese su Nombre(s) y Apellidos")

        estado = -1;

        document.fcontacto.datos.focus();

      }	  



      if (estado == 1)

		{		estado = ValidarCorreo();}

	

	

	    if ( document.fcontacto.telefono.value== '' && estado == 1) {

        alert("Porfavor, ingrese su telefono de casa")

        estado = -1;

        document.fcontacto.telefono.focus();

      }

	  

 	if ( document.fcontacto.forma.options[document.fcontacto.forma.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, seleccione la forma de pago");

			  estado = -1;

			  document.fcontacto.forma.focus();

    	}



	   if ( document.fcontacto.fecha.value== '' && estado == 1) {

        alert("Porfavor, ingrese la fecha del pago (dia/mes/anio)")

        estado = -1;

        document.fcontacto.fecha.focus();

		}



	   if ( document.fcontacto.codigo.value== '' && estado == 1) {

        alert("Porfavor, ingrese el nro de Recibo o Transaccion")

        estado = -1;

        document.fcontacto.codigo.focus();

      }

	  

	   if ( document.fcontacto.monto.value== '' && estado == 1) {

        alert("Porfavor, ingrese el Monto depositado")

        estado = -1;

        document.fcontacto.monto.focus();

      }

	  

	   if ( document.fcontacto.observaciones.value== '' && estado == 1) {

        alert("Porfavor, ingrese su mensaje u observacion")

        estado = -1;

        document.fcontacto.observaciones.focus();

      }	  

  	

	

	  if (estado== 1) {

	 document.fcontacto.submit()

	        }

}



//---------------



function validar_boletin() {

  var estado = 1;

  	

	    if ( document.fcontacto.nombre.value== '' && estado == 1) {

        alert("Porfavor, ingrese su nombre")

        estado = -1;

        document.fcontacto.nombre.focus();

      }

	  

      if (estado == 1)

		{		estado = ValidarCorreo();}

		

	  if (estado == 1) {

	 document.fcontacto.submit()

	        }

}



//--------------------------------------


function validar_historia_adulto_mujer() {

  var estado = 1;

  	



	   if ( document.fcontacto.paciente.value== '' && estado == 1) {

        alert("Porfavor, ingrese Nombre(s) y Apellidos del Paciente")

        estado = -1;

        document.fcontacto.paciente.focus();

      }	  



      if (estado == 1)

		{		estado = ValidarCorreo();}

	

	

	    if ( document.fcontacto.fijo.value== '' && estado == 1) {

        alert("Porfavor, ingrese el telefono de casa")

        estado = -1;

        document.fcontacto.fijo.focus();

      }



	    if ( document.fcontacto.celular.value== '' && estado == 1) {

        alert("Porfavor, ingrese su telefono celular")

        estado = -1;

        document.fcontacto.celular.focus();

      }


/*
	 	    if ( document.fcontacto.direccion_adultos.value== '' && estado == 1) {

        alert("Porfavor, ingrese su Direccion")

        estado = -1;

        document.fcontacto.direccion_adultos.focus();

      }
*/
	  

 	if ( document.fcontacto.motivo.options[document.fcontacto.motivo.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, elija el motivo de la consulta");

			  estado = -1;

			  document.fcontacto.motivo.focus();

    	}


	    if ( document.fcontacto.edad.value== '' && estado == 1) {

        alert("Porfavor, ingrese su edad")

        estado = -1;

        document.fcontacto.edad.focus();

      }
	  

	   if ( document.fcontacto.peso.value== '' && estado == 1) {

        alert("Porfavor, ingrese el Peso")

        estado = -1;

        document.fcontacto.peso.focus();

      }



	   if ( document.fcontacto.talla.value== '' && estado == 1) {

        alert("Porfavor, ingrese la Talla")

        estado = -1;

        document.fcontacto.talla.focus();

      }

	  

 	if ( document.fcontacto.horarios.options[document.fcontacto.horarios.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, seleccione cual su horario de trabajo");

			  estado = -1;

			  document.fcontacto.horarios.focus();

    	}



 	if ( document.fcontacto.actividad.options[document.fcontacto.actividad.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, elija la frecuencia de actividad fisica");

			  estado = -1;

			  document.fcontacto.actividad.focus();

    	}

	  	  

	   if ( document.fcontacto.desayuno.value== '' && estado == 1) {

        alert("Porfavor, ingrese tomo de desayuno ayer, y a que hora")

        estado = -1;

        document.fcontacto.desayuno.focus();

      }	  



	   if ( document.fcontacto.mediamanana.value== '' && estado == 1) {

        alert("Porfavor, ingrese que comio ayer entre desayuno y almuerzo, y a que hora")

        estado = -1;

        document.fcontacto.mediamanana.focus();

      }	  



	   if ( document.fcontacto.almuerzo.value== '' && estado == 1) {

        alert("Porfavor, ingrese en que comio ayer en su almuerzo, y a que hora")

        estado = -1;

        document.fcontacto.almuerzo.focus();

      }	  



	   if ( document.fcontacto.mediatarde.value== '' && estado == 1) {

        alert("Porfavor, ingrese que comio ayer entre almuerzo y cena, y a que hora")

        estado = -1;

        document.fcontacto.mediatarde.focus();

      }	  



	   if ( document.fcontacto.cena.value== '' && estado == 1) {

        alert("Porfavor, ingrese que comio ayer en la cena, y a que hora")

        estado = -1;

        document.fcontacto.cena.focus();

      }	 

	  
	   if ( document.fcontacto.lacteos.value== '' && estado == 1) {

        alert("Porfavor, ingrese que lacteos consume")

        estado = -1;

        document.fcontacto.lacteos.focus();

      }	 

	   if ( document.fcontacto.frutas.value== '' && estado == 1) {

        alert("Porfavor, ingrese que frutas consume")

        estado = -1;

        document.fcontacto.frutas.focus();

      }	 


	   if ( document.fcontacto.ensaladas.value== '' && estado == 1) {

        alert("Porfavor, ingrese que verduras consume en las ensaladas")

        estado = -1;

        document.fcontacto.ensaladas.focus();

      }	 


	   if ( document.fcontacto.carnes.value== '' && estado == 1) {

        alert("Porfavor, ingrese que tipo de carnes consume")

        estado = -1;

        document.fcontacto.carnes.focus();

      }	 

	   if ( document.fcontacto.tuberculos.value== '' && estado == 1) {

        alert("Porfavor, ingrese tuberculos, cereales o menestras consume")

        estado = -1;

        document.fcontacto.tuberculos.focus();

      }	 

	   if ( document.fcontacto.agua.value== '' && estado == 1) {

        alert("Porfavor, ingrese cuantos vasos de agua consume al dia")

        estado = -1;

        document.fcontacto.agua.focus();

      }	 	  

		if ( document.fcontacto.come1.options[document.fcontacto.come1.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Bebidas con azucar o miel");

			  estado = -1;

			  document.fcontacto.come1.focus();

    	}



		if ( document.fcontacto.come2.options[document.fcontacto.come2.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que asiste a compromisos con comida y bebidas");

			  estado = -1;

			  document.fcontacto.come2.focus();

    	}

		

		if ( document.fcontacto.come3.options[document.fcontacto.come3.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Postres, chocolates ");

			  estado = -1;

			  document.fcontacto.come3.focus();

    	}

		

		if ( document.fcontacto.come4.options[document.fcontacto.come4.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Snacks");

			  estado = -1;

			  document.fcontacto.come4.focus();

    	}

		

		if ( document.fcontacto.come5.options[document.fcontacto.come5.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Comidas Rapidas");

			  estado = -1;

			  document.fcontacto.come5.focus();

    	}

		

		if ( document.fcontacto.come6.options[document.fcontacto.come6.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Galletas");

			  estado = -1;

			  document.fcontacto.come6.focus();

    	}

		

		if ( document.fcontacto.come7.options[document.fcontacto.come7.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Frituras");

			  estado = -1;

			  document.fcontacto.come7.focus();

    	}

		

		if ( document.fcontacto.come8.options[document.fcontacto.come8.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Mermelada");

			  estado = -1;

			  document.fcontacto.come8.focus();

    	}

		

		if ( document.fcontacto.come9.options[document.fcontacto.come9.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Embutidos");

			  estado = -1;

			  document.fcontacto.come9.focus();

    	}

		

		if ( document.fcontacto.come10.options[document.fcontacto.come10.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Mantequilla");

			  estado = -1;

			  document.fcontacto.come10.focus();

    	}

		

		if ( document.fcontacto.come11.options[document.fcontacto.come11.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Quesos grasosos");

			  estado = -1;

			  document.fcontacto.come11.focus();

    	}

	

  	

	

	  if (estado== 1) {

	 document.fcontacto.submit()

	        }

}


//--------------------------------------



function validar_historia_adulto_hombre() {

  var estado = 1;

  	



	   if ( document.fcontacto.paciente.value== '' && estado == 1) {

        alert("Porfavor, ingrese Nombre(s) y Apellidos del Paciente")

        estado = -1;

        document.fcontacto.paciente.focus();

      }	  



      if (estado == 1)

		{		estado = ValidarCorreo();}

	

	

	    if ( document.fcontacto.fijo.value== '' && estado == 1) {

        alert("Porfavor, ingrese el telefono de casa")

        estado = -1;

        document.fcontacto.fijo.focus();

      }



	    if ( document.fcontacto.celular.value== '' && estado == 1) {

        alert("Porfavor, ingrese su telefono celular")

        estado = -1;

        document.fcontacto.celular.focus();

      }



 	if ( document.fcontacto.motivo.options[document.fcontacto.motivo.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, elija el motivo de la consulta");

			  estado = -1;

			  document.fcontacto.motivo.focus();

    	}


	    if ( document.fcontacto.edad.value== '' && estado == 1) {

        alert("Porfavor, ingrese su edad")

        estado = -1;

        document.fcontacto.edad.focus();

      }
	  

	   if ( document.fcontacto.peso.value== '' && estado == 1) {

        alert("Porfavor, ingrese el Peso")

        estado = -1;

        document.fcontacto.peso.focus();

      }



	   if ( document.fcontacto.talla.value== '' && estado == 1) {

        alert("Porfavor, ingrese la Talla")

        estado = -1;

        document.fcontacto.talla.focus();

      }

	  

 	if ( document.fcontacto.horarios.options[document.fcontacto.horarios.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, seleccione cual su horario de trabajo");

			  estado = -1;

			  document.fcontacto.horarios.focus();

    	}



 	if ( document.fcontacto.actividad.options[document.fcontacto.actividad.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, elija la frecuencia de actividad fisica");

			  estado = -1;

			  document.fcontacto.actividad.focus();

    	}
		
/* */
	   if ( document.fcontacto.actividad_fisica.value== '' && estado == 1) {

        alert("Porfavor, ingrese que actividad fisica practica")

        estado = -1;

        document.fcontacto.actividad_fisica.focus();

      }	  

		
	   if ( document.fcontacto.enfermedad.value== '' && estado == 1) {

        alert("Porfavor, Tiene alguna enfermedad, examenes de laboratorio o endocrinologicos")

        estado = -1;

        document.fcontacto.enfermedad.focus();

      }	  
	  
	  	   if ( document.fcontacto.suplementos.value== '' && estado == 1) {

        alert("Porfavor, Consume suplementos, vitaminas o pastillas")

        estado = -1;

        document.fcontacto.suplementos.focus();

      }	  
	  
	  	   if ( document.fcontacto.restaurantes.value== '' && estado == 1) {

        alert("Porfavor, ingrese si almuerza o cena en restaurantes a diario")

        estado = -1;

        document.fcontacto.restaurantes.focus();

      }	  
	  
	  /* */
	  	  

	   if ( document.fcontacto.desayuno.value== '' && estado == 1) {

        alert("Porfavor, ingrese tomo de desayuno ayer, y a que hora")

        estado = -1;

        document.fcontacto.desayuno.focus();

      }	  



	   if ( document.fcontacto.mediamanana.value== '' && estado == 1) {

        alert("Porfavor, ingrese que comio ayer entre desayuno y almuerzo, y a que hora")

        estado = -1;

        document.fcontacto.mediamanana.focus();

      }	  



	   if ( document.fcontacto.almuerzo.value== '' && estado == 1) {

        alert("Porfavor, ingrese en que comio ayer en su almuerzo, y a que hora")

        estado = -1;

        document.fcontacto.almuerzo.focus();

      }	  



	   if ( document.fcontacto.mediatarde.value== '' && estado == 1) {

        alert("Porfavor, ingrese que comio ayer entre almuerzo y cena, y a que hora")

        estado = -1;

        document.fcontacto.mediatarde.focus();

      }	  



	   if ( document.fcontacto.cena.value== '' && estado == 1) {

        alert("Porfavor, ingrese que comio ayer en la cena, y a que hora")

        estado = -1;

        document.fcontacto.cena.focus();

      }	 

	  
	   if ( document.fcontacto.lacteos.value== '' && estado == 1) {

        alert("Porfavor, ingrese que lacteos consume")

        estado = -1;

        document.fcontacto.lacteos.focus();

      }	 

	   if ( document.fcontacto.frutas.value== '' && estado == 1) {

        alert("Porfavor, ingrese que frutas consume")

        estado = -1;

        document.fcontacto.frutas.focus();

      }	 


	   if ( document.fcontacto.ensaladas.value== '' && estado == 1) {

        alert("Porfavor, ingrese que verduras consume en las ensaladas")

        estado = -1;

        document.fcontacto.ensaladas.focus();

      }	 


	   if ( document.fcontacto.carnes.value== '' && estado == 1) {

        alert("Porfavor, ingrese que tipo de carnes consume")

        estado = -1;

        document.fcontacto.carnes.focus();

      }	 

	   if ( document.fcontacto.tuberculos.value== '' && estado == 1) {

        alert("Porfavor, ingrese tuberculos, cereales o menestras consume")

        estado = -1;

        document.fcontacto.tuberculos.focus();

      }	 

	   if ( document.fcontacto.agua.value== '' && estado == 1) {

        alert("Porfavor, ingrese cuantos vasos de agua consume al dia")

        estado = -1;

        document.fcontacto.agua.focus();

      }	 	  

		if ( document.fcontacto.come1.options[document.fcontacto.come1.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Bebidas con azucar o miel");

			  estado = -1;

			  document.fcontacto.come1.focus();

    	}



		if ( document.fcontacto.come2.options[document.fcontacto.come2.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que asiste a compromisos con comida y bebidas");

			  estado = -1;

			  document.fcontacto.come2.focus();

    	}

		

		if ( document.fcontacto.come3.options[document.fcontacto.come3.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Postres, chocolates ");

			  estado = -1;

			  document.fcontacto.come3.focus();

    	}

		

		if ( document.fcontacto.come4.options[document.fcontacto.come4.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Snacks");

			  estado = -1;

			  document.fcontacto.come4.focus();

    	}

		

		if ( document.fcontacto.come5.options[document.fcontacto.come5.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Comidas Rapidas");

			  estado = -1;

			  document.fcontacto.come5.focus();

    	}

		

		if ( document.fcontacto.come6.options[document.fcontacto.come6.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Galletas");

			  estado = -1;

			  document.fcontacto.come6.focus();

    	}

		

		if ( document.fcontacto.come7.options[document.fcontacto.come7.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Frituras");

			  estado = -1;

			  document.fcontacto.come7.focus();

    	}

		

		if ( document.fcontacto.come8.options[document.fcontacto.come8.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Mermelada");

			  estado = -1;

			  document.fcontacto.come8.focus();

    	}

		

		if ( document.fcontacto.come9.options[document.fcontacto.come9.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Embutidos");

			  estado = -1;

			  document.fcontacto.come9.focus();

    	}

		

		if ( document.fcontacto.come10.options[document.fcontacto.come10.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Mantequilla");

			  estado = -1;

			  document.fcontacto.come10.focus();

    	}

		

		if ( document.fcontacto.come11.options[document.fcontacto.come11.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Quesos grasosos");

			  estado = -1;

			  document.fcontacto.come11.focus();

    	}

	

  	

	

	  if (estado== 1) {

	 document.fcontacto.submit()

	        }

}

//--------------------------------------



function validar_historia_ninos() {

  var estado = 1;

  	



	   if ( document.fcontacto.apoderado.value== '' && estado == 1) {

        alert("Porfavor, ingrese Nombre(s) y Apellidos de la Madre, Padre o Apoderado")

        estado = -1;

        document.fcontacto.apoderado.focus();

      }	  



      if (estado == 1)

		{		estado = ValidarCorreo();}

	

	

	    if ( document.fcontacto.fijo.value== '' && estado == 1) {

        alert("Porfavor, ingrese el telefono de casa")

        estado = -1;

        document.fcontacto.fijo.focus();

      }



	    if ( document.fcontacto.celular.value== '' && estado == 1) {

        alert("Porfavor, ingrese su telefono celular")

        estado = -1;

        document.fcontacto.celular.focus();

      }


	    if ( document.fcontacto.paciente.value== '' && estado == 1) {

        alert("Porfavor, ingrese nombre(s) y Apellidos del paciente")

        estado = -1;

        document.fcontacto.paciente.focus();

      }
	  

 	if ( document.fcontacto.sexo.options[document.fcontacto.sexo.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, elija el sexo del paciente");

			  estado = -1;

			  document.fcontacto.sexo.focus();

    	}
		
		

 	if ( document.fcontacto.motivo.options[document.fcontacto.motivo.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, elija el motivo de la consulta");

			  estado = -1;

			  document.fcontacto.motivo.focus();

    	}


	    if ( document.fcontacto.nacimiento.value== '' && estado == 1) {

        alert("Porfavor, ingrese la fecha de nacimiento del paciente")

        estado = -1;

        document.fcontacto.nacimiento.focus();

      }



	    if ( document.fcontacto.edad.value== '' && estado == 1) {

        alert("Porfavor, ingrese su edad")

        estado = -1;

        document.fcontacto.edad.focus();

      }
	  	  

	   if ( document.fcontacto.peso.value== '' && estado == 1) {

        alert("Porfavor, ingrese el Peso")

        estado = -1;

        document.fcontacto.peso.focus();

      }



	   if ( document.fcontacto.talla.value== '' && estado == 1) {

        alert("Porfavor, ingrese la Talla")

        estado = -1;

        document.fcontacto.talla.focus();

      }

	  

 	if ( document.fcontacto.horarios.options[document.fcontacto.horarios.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, seleccione cual su horario de trabajo");

			  estado = -1;

			  document.fcontacto.horarios.focus();

    	}



 	if ( document.fcontacto.actividad.options[document.fcontacto.actividad.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, elija la frecuencia de actividad fisica");

			  estado = -1;

			  document.fcontacto.actividad.focus();

    	}
		
/* */
	   if ( document.fcontacto.actividad_fisica.value== '' && estado == 1) {

        alert("Porfavor, ingrese que actividad fisica practica")

        estado = -1;

        document.fcontacto.actividad_fisica.focus();

      }	  

		
	   if ( document.fcontacto.enfermedad.value== '' && estado == 1) {

        alert("Porfavor, Tiene alguna enfermedad, examenes de laboratorio o endocrinologicos")

        estado = -1;

        document.fcontacto.enfermedad.focus();

      }	  
	  
	  	   if ( document.fcontacto.suplementos.value== '' && estado == 1) {

        alert("Porfavor, Consume suplementos, vitaminas o pastillas")

        estado = -1;

        document.fcontacto.suplementos.focus();

      }	  
	  
	  	   if ( document.fcontacto.comedor.value== '' && estado == 1) {

        alert("Porfavor, ingrese si almuerza la comida del comedor del colegio")

        estado = -1;

        document.fcontacto.comedor.focus();

      }	  
	  
	  /* */
	  	  

	   if ( document.fcontacto.desayuno.value== '' && estado == 1) {

        alert("Porfavor, ingrese tomo de desayuno ayer, y a que hora")

        estado = -1;

        document.fcontacto.desayuno.focus();

      }	  



	   if ( document.fcontacto.mediamanana.value== '' && estado == 1) {

        alert("Porfavor, ingrese que comio ayer entre desayuno y almuerzo, y a que hora")

        estado = -1;

        document.fcontacto.mediamanana.focus();

      }	  



	   if ( document.fcontacto.almuerzo.value== '' && estado == 1) {

        alert("Porfavor, ingrese en que comio ayer en su almuerzo, y a que hora")

        estado = -1;

        document.fcontacto.almuerzo.focus();

      }	  



	   if ( document.fcontacto.mediatarde.value== '' && estado == 1) {

        alert("Porfavor, ingrese que comio ayer entre almuerzo y cena, y a que hora")

        estado = -1;

        document.fcontacto.mediatarde.focus();

      }	  



	   if ( document.fcontacto.cena.value== '' && estado == 1) {

        alert("Porfavor, ingrese que comio ayer en la cena, y a que hora")

        estado = -1;

        document.fcontacto.cena.focus();

      }	 

	  
	   if ( document.fcontacto.lacteos.value== '' && estado == 1) {

        alert("Porfavor, ingrese que lacteos consume")

        estado = -1;

        document.fcontacto.lacteos.focus();

      }	 

	   if ( document.fcontacto.frutas.value== '' && estado == 1) {

        alert("Porfavor, ingrese que frutas consume")

        estado = -1;

        document.fcontacto.frutas.focus();

      }	 


	   if ( document.fcontacto.ensaladas.value== '' && estado == 1) {

        alert("Porfavor, ingrese que verduras consume en las ensaladas")

        estado = -1;

        document.fcontacto.ensaladas.focus();

      }	 


	   if ( document.fcontacto.carnes.value== '' && estado == 1) {

        alert("Porfavor, ingrese que tipo de carnes consume")

        estado = -1;

        document.fcontacto.carnes.focus();

      }	 

	   if ( document.fcontacto.tuberculos.value== '' && estado == 1) {

        alert("Porfavor, ingrese tuberculos, cereales o menestras consume")

        estado = -1;

        document.fcontacto.tuberculos.focus();

      }	 

	   if ( document.fcontacto.agua.value== '' && estado == 1) {

        alert("Porfavor, ingrese cuantos vasos de agua consume al dia")

        estado = -1;

        document.fcontacto.agua.focus();

      }	 	  

		if ( document.fcontacto.come1.options[document.fcontacto.come1.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Bebidas con azucar o miel");

			  estado = -1;

			  document.fcontacto.come1.focus();

    	}



		if ( document.fcontacto.come2.options[document.fcontacto.come2.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que asiste a compromisos con comida y bebidas");

			  estado = -1;

			  document.fcontacto.come2.focus();

    	}

		

		if ( document.fcontacto.come3.options[document.fcontacto.come3.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Postres, chocolates ");

			  estado = -1;

			  document.fcontacto.come3.focus();

    	}

		

		if ( document.fcontacto.come4.options[document.fcontacto.come4.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Snacks");

			  estado = -1;

			  document.fcontacto.come4.focus();

    	}

		

		if ( document.fcontacto.come5.options[document.fcontacto.come5.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Comidas Rapidas");

			  estado = -1;

			  document.fcontacto.come5.focus();

    	}

		

		if ( document.fcontacto.come6.options[document.fcontacto.come6.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Galletas");

			  estado = -1;

			  document.fcontacto.come6.focus();

    	}

		

		if ( document.fcontacto.come7.options[document.fcontacto.come7.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Frituras");

			  estado = -1;

			  document.fcontacto.come7.focus();

    	}

		

		if ( document.fcontacto.come8.options[document.fcontacto.come8.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Mermelada");

			  estado = -1;

			  document.fcontacto.come8.focus();

    	}

		

		if ( document.fcontacto.come9.options[document.fcontacto.come9.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Embutidos");

			  estado = -1;

			  document.fcontacto.come9.focus();

    	}

		

		if ( document.fcontacto.come10.options[document.fcontacto.come10.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Mantequilla");

			  estado = -1;

			  document.fcontacto.come10.focus();

    	}

		

		if ( document.fcontacto.come11.options[document.fcontacto.come11.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, indique la frecuencia con que consume Quesos grasosos");

			  estado = -1;

			  document.fcontacto.come11.focus();

    	}

	

  	

	

	  if (estado== 1) {

	 document.fcontacto.submit()

	        }

}


//--------------------------------------



function validar_historia_bebes_lactantes() {

  var estado = 1;

  	



	   if ( document.fcontacto.apoderado.value== '' && estado == 1) {

        alert("Porfavor, ingrese Nombre(s) y Apellidos de la Madre, Padre o Apoderado")

        estado = -1;

        document.fcontacto.apoderado.focus();

      }	  



      if (estado == 1)

		{		estado = ValidarCorreo();}

	

	

	    if ( document.fcontacto.fijo.value== '' && estado == 1) {

        alert("Porfavor, ingrese el telefono de casa")

        estado = -1;

        document.fcontacto.fijo.focus();

      }



	    if ( document.fcontacto.celular.value== '' && estado == 1) {

        alert("Porfavor, ingrese su telefono celular")

        estado = -1;

        document.fcontacto.celular.focus();

      }


	    if ( document.fcontacto.paciente.value== '' && estado == 1) {

        alert("Porfavor, ingrese nombre(s) y Apellidos del paciente")

        estado = -1;

        document.fcontacto.paciente.focus();

      }
	  

 	if ( document.fcontacto.sexo.options[document.fcontacto.sexo.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, elija el sexo del paciente");

			  estado = -1;

			  document.fcontacto.sexo.focus();

    	}
		
		

 	if ( document.fcontacto.motivo.options[document.fcontacto.motivo.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, elija el motivo de la consulta");

			  estado = -1;

			  document.fcontacto.motivo.focus();

    	}


	    if ( document.fcontacto.nacimiento.value== '' && estado == 1) {

        alert("Porfavor, ingrese la fecha de nacimiento del paciente")

        estado = -1;

        document.fcontacto.nacimiento.focus();

      }



 	if ( document.fcontacto.tipo_peso.options[document.fcontacto.tipo_peso.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, seleccione el tipo de peso");

			  estado = -1;

			  document.fcontacto.tipo_peso.focus();

    	}


	   if ( document.fcontacto.peso.value== '' && estado == 1) {

        alert("Porfavor, ingrese el Peso")

        estado = -1;

        document.fcontacto.peso.focus();

      }



	   if ( document.fcontacto.talla.value== '' && estado == 1) {

        alert("Porfavor, ingrese la Talla")

        estado = -1;

        document.fcontacto.talla.focus();

      }

	  

 	if ( document.fcontacto.actividad.options[document.fcontacto.actividad.selectedIndex].value == '' && estado == 1) 

		{

			  alert("Porfavor, elija la actividad que realiza su bebe");

			  estado = -1;

			  document.fcontacto.actividad.focus();

    	}
		
/* */
		
	   if ( document.fcontacto.prematuro.value== '' && estado == 1) {

        alert("Porfavor, nacio prematuro, peso y tallas al nacer, recibio lactancia materna")

        estado = -1;

        document.fcontacto.prematuro.focus();

      }	  
	  
	  	   if ( document.fcontacto.enfermedad.value== '' && estado == 1) {

        alert("Porfavor, Tiene alguna enfermedad, alergia, examenes de laboratorio")

        estado = -1;

        document.fcontacto.enfermedad.focus();

      }	  
	  
	  
	  /* */
	  	  

	   if ( document.fcontacto.comidas.value== '' && estado == 1) {

        alert("Porfavor, ingrese cuantas comidas al dia recibe su bebe")

        estado = -1;

        document.fcontacto.comidas.focus();

      }	  

	   if ( document.fcontacto.cantidad_comidas.value== '' && estado == 1) {

        alert("Porfavor, ingrese que cantidad de comida recibe su bebe")

        estado = -1;

        document.fcontacto.cantidad_comidas.focus();

      }	  

	   if ( document.fcontacto.consistencia.value== '' && estado == 1) {

        alert("Porfavor, ingrese Cual es la consistencia de la comida de su bebe")

        estado = -1;

        document.fcontacto.consistencia.focus();

      }	  

	   if ( document.fcontacto.horarios.value== '' && estado == 1) {

        alert("Porfavor, ingrese Cuales son sus horarios de comida")

        estado = -1;

        document.fcontacto.horarios.focus();

      }	  

	   if ( document.fcontacto.quien_comer.value== '' && estado == 1) {

        alert("Porfavor, ingrese Quien le da de comer")

        estado = -1;

        document.fcontacto.quien_comer.focus();

      }	  

	   if ( document.fcontacto.demora_comer.value== '' && estado == 1) {

        alert("Porfavor, ingrese si es quisquilloso para comer, cuanto tiempo se  demora para comer")

        estado = -1;

        document.fcontacto.demora_comer.focus();

      }	  

	   if ( document.fcontacto.muelas.value== '' && estado == 1) {

        alert("Porfavor, ingrese Cuantas muelas tiene el bebe  y en que posición estan  adelante o atras ")

        estado = -1;

        document.fcontacto.muelas.focus();

      }	  

	   if ( document.fcontacto.come_solo.value== '' && estado == 1) {

        alert("Porfavor, ingrese si ya aprendio a comer solo, recibe ayuda o se le da de comer ")

        estado = -1;

        document.fcontacto.come_solo.focus();

      }	  

	   if ( document.fcontacto.duerme.value== '' && estado == 1) {

        alert("Porfavor, ingrese Cuantas horas duerme y horarios de dormir")

        estado = -1;

        document.fcontacto.duerme.focus();

      }	  

	   if ( document.fcontacto.tomas_lactancia.value== '' && estado == 1) {

        alert("Porfavor, ingrese Cuantas  tomas y duracion de la tomas  de lactancia materna recibe")

        estado = -1;

        document.fcontacto.tomas_lactancia.focus();

      }	  

	   if ( document.fcontacto.tomas_leche.value== '' && estado == 1) {

        alert("Porfavor, ingrese Cuantas tomas y cantidad de leche formula recibe y la marca ")

        estado = -1;

        document.fcontacto.tomas_leche.focus();

      }	  

	   if ( document.fcontacto.taza.value== '' && estado == 1) {

        alert("Porfavor, ingrese si Utiliza la taza")

        estado = -1;

        document.fcontacto.taza.focus();

      }	  

	   if ( document.fcontacto.sol.value== '' && estado == 1) {

        alert("Porfavor, ingrese Cuanto tiempo se expone al sol")

        estado = -1;

        document.fcontacto.sol.focus();

      }	  

	   if ( document.fcontacto.agua.value== '' && estado == 1) {

        alert("Porfavor, ingrese Cuantas onzas  de agua pura toma  al dia y los horarios ")

        estado = -1;

        document.fcontacto.agua.focus();

      }	  

	   if ( document.fcontacto.gatea_camina.value== '' && estado == 1) {

        alert("Porfavor, ingrese Actividad fisica: cuanto tiempo gatea o camina dia")

        estado = -1;

        document.fcontacto.gatea_camina.focus();

      }	  






	  
	   if ( document.fcontacto.lacteos.value== '' && estado == 1) {

        alert("Porfavor, ingrese que lacteos consume")

        estado = -1;

        document.fcontacto.lacteos.focus();

      }	 

	   if ( document.fcontacto.frutas.value== '' && estado == 1) {

        alert("Porfavor, ingrese que frutas consume")

        estado = -1;

        document.fcontacto.frutas.focus();

      }	 


	   if ( document.fcontacto.verduras.value== '' && estado == 1) {

        alert("Porfavor, ingrese que verduras consume su bebe")

        estado = -1;

        document.fcontacto.verduras.focus();

      }	 


	   if ( document.fcontacto.carnes.value== '' && estado == 1) {

        alert("Porfavor, ingrese que tipo de carnes consume")

        estado = -1;

        document.fcontacto.carnes.focus();

      }	 

	   if ( document.fcontacto.tuberculos.value== '' && estado == 1) {

        alert("Porfavor, ingrese tuberculos, cereales o menestras consume")

        estado = -1;

        document.fcontacto.tuberculos.focus();

      }	 
	  

	   if ( document.fcontacto.otros_alimentos.value== '' && estado == 1) {

        alert("Porfavor, mencione que otros alimentos adicionales que no he mencionado consume su bebe")

        estado = -1;

        document.fcontacto.otros_alimentos.focus();

      }	 
	  	  


	

	  if (estado== 1) {

	 document.fcontacto.submit()

	        }

}
