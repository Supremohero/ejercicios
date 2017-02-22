// funcion para ir almacenando y mostrando los intentos en una cookie
function intentos() {
	var intentos = getCookie("intentos");
	var intentos = Number(intentos) + 1;
	document.cookie = "intentos="+intentos+"; expires=Thu, 28 Dec 2017 12:00:00 UTC";
	document.getElementById("intentos").innerHTML= "Intento de Envíos del formulario: "+getCookie("intentos");
}

// funcion para separar las cookies y mostrar el valor del nombre pasado por parametro
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length,c.length);
        }
    }
    return "";
}

// funcion para validar todos los campos
function ValidaCampos() {
	//nombre (puede ser compuesto) (siempre con la primera letra mayúscula)
	var er_nombre = /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/;
	
	//apellidos (siempre con la primera letra mayúscula)
	var er_apellidos = /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/;
	
	//edad entre 0 y 105
	var er_edad = /^([0-9]|[0-9][0-9]|10[0-5])$/;
	
	//nif
	//que empiece(^) por 8 cifras numericas(\d{8} seguido de un guión
	//seguido de un caracter alfabetico entre a-z o entre A-Z
	var er_nif = /^\d{8}-[a-zA-Z]$/;
	
	//que empiece(^) por lo que está entre paréntesis { por cualquier caracter(.) una vez o mas(+)
	//seguido del caracter @(\@ escape para caracteres especiales(\) seguido del caracter @)
	//seguido de cualquier caracter(.) una vez o mas(+) seguido del caracter .(\. escape seguido de un .)
	//seguido de cualquier caracter(.) una vez o mas(+) } y final de linea($)
	var er_email = /^(.+\@.+\..+)$/; 
	
	//provincia
	var er_provincia = /^([C]|[L][U]|[O][U]|[P])$/;
	
	//fecha
	//o bien: empiece por 2 digitos(\d{2}) seguido de un guión seguido de otros 2 dígitos
	//seguido de un guión seguido de 4 digitos,
	//o bien(|): empiece por 2 digitos seguido de una barra inclinada (/)
	//seguido de otros 2 digitos seguido de otra barra inclinada (/) y de 4 digitos, y fin de linea ($)
	var er_fecha = /^((\d{2})-(\d{2})-(\d{4})|(\d{2})\/(\d{2})\/(\d{4}))$/;
	
	//telefono
	//debe empezar(^) por 9 digitos (\d --> cualquier digito, {9} --> 9 veces) y final de linea($)
	var er_telefono = /^\d{9}$/;
	
	//hora
	//primeros 2 digitos entre 00 y 23, seguido de : seguido de dos digitos entre 00 y 59
	var er_hora = /^(0\d|1\d|2[0-3]):([0-5]\d)$/;
	
	document.getElementById("errores").innerHTML = "Errores de los siguientes campos:<br/>";
	
	// tenemos la variable correcto en true por defecto
	correcto = true;
	
	// validando nombre
	if(er_nombre.test(formulario.nombre.value)==false) {
		document.getElementById("errores").innerHTML += "NOMBRE<br/>";
		document.getElementById("nombre").focus();
		correcto = false;
	}
	
	// validando apellidos
	if(er_apellidos.test(formulario.apellidos.value)==false) {
		document.getElementById("errores").innerHTML += "APELLIDOS<br/>";
		// Si correcto es true quiere decir que el campo anterior está bien,
		// por lo que hacemos focus a este campo
		if (correcto == true) {
			document.getElementById("apellidos").focus();
		}
		// Si esta validación es false, se ejecuta este código, por lo tanto
		// correcto pasa a ser false y no se ejecuta el siguiente focus
		correcto = false;
	}
	
	// validando edad
	if(er_edad.test(formulario.edad.value)==false) {
		document.getElementById("errores").innerHTML += "EDAD<br/>";
		// Si correcto es true quiere decir que el campo anterior está bien,
		// por lo que hacemos focus a este campo
		if (correcto == true) {
			document.getElementById("edad").focus();
		}
		// Si esta validación es false, se ejecuta este código, por lo tanto
		// correcto pasa a ser false y no se ejecuta el siguiente focus
		correcto = false;
	}
	
	// validando nif
	if(er_nif.test(formulario.nif.value)==false) {
		document.getElementById("errores").innerHTML += "NIF<br/>";
		// Si correcto es true quiere decir que el campo anterior está bien,
		// por lo que hacemos focus a este campo
		if (correcto == true) {
			document.getElementById("nif").focus();
		}
		// Si esta validación es false, se ejecuta este código, por lo tanto
		// correcto pasa a ser false y no se ejecuta el siguiente focus
		correcto = false;
	}
	
	//validando email
	if(er_email.test(formulario.email.value)==false) {
		document.getElementById("errores").innerHTML += "EMAIL<br/>";
		// Si correcto es true quiere decir que el campo anterior está bien,
		// por lo que hacemos focus a este campo
		if (correcto == true) {
			document.getElementById("email").focus();
		}
		// Si esta validación es false, se ejecuta este código, por lo tanto
		// correcto pasa a ser false y no se ejecuta el siguiente focus
		correcto = false;
	}
	
	// validando provincia
	if(er_provincia.test(formulario.provincia.value)==false) {
		document.getElementById("errores").innerHTML += "PROVINCIA<br/>";
		// Si correcto es true quiere decir que el campo anterior está bien,
		// por lo que hacemos focus a este campo
		if (correcto == true) {
			document.getElementById("provincia").focus();
		}
		// Si esta validación es false, se ejecuta este código, por lo tanto
		// correcto pasa a ser false y no se ejecuta el siguiente focus
		correcto = false;
	}
	
	// validando Fecha nacimiento
	if(er_fecha.test(formulario.fecha.value)==false) {
		document.getElementById("errores").innerHTML += "FECHA<br/>";
		// Si correcto es true quiere decir que el campo anterior está bien,
		// por lo que hacemos focus a este campo
		if (correcto == true) {
			document.getElementById("fecha").focus();
		}
		// Si esta validación es false, se ejecuta este código, por lo tanto
		// correcto pasa a ser false y no se ejecuta el siguiente focus
		correcto = false;
	}
	
	// validando telefono
	if(er_telefono.test(formulario.telefono.value)==false) {
		document.getElementById("errores").innerHTML += "TELÉFONO<br/>";
		// Si correcto es true quiere decir que el campo anterior está bien,
		// por lo que hacemos focus a este campo
		if (correcto == true) {
			document.getElementById("telefono").focus();
		}
		// Si esta validación es false, se ejecuta este código, por lo tanto
		// correcto pasa a ser false y no se ejecuta el siguiente focus
		correcto = false;
	}
	
	// validando hora de visita
	if(er_hora.test(formulario.hora.value)==false) {
		document.getElementById("errores").innerHTML += "HORA<br/>";
		// Si correcto es true quiere decir que el campo anterior está bien,
		// por lo que hacemos focus a este campo
		if (correcto == true) {
			document.getElementById("hora").focus();
		}
		// Si esta validación es false, se ejecuta este código, por lo tanto
		// correcto pasa a ser false y no se ejecuta el siguiente focus
		correcto = false;
	}
	
	// Si correcto es true quiere decir que no hay errores ya que es el valor por defecto,
	// por lo que salta la confirmación y devuelve true si confirmamos
	if (correcto == true) {
	confirmar = confirm("Confirmación del envío del formulario.\n Al hacer click en aceptar usted está aceptando los términos y condiciones");
		if(confirmar) {
			return true;
		} else {
			document.getElementById("errores").innerHTML = "";
		}
	}
	
	// en caso de que correcto no sea true, quiere decir que hay algún error,
	// por lo que devuelve false para que no se envíe el formulario
	return false;
}



