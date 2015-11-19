/*
metodo que permite hacer las validaciones en los campos de inicio de sesion
*/
$("#loguear").click(function(){

	var validacion = $("#formuloguear").validate({
		rules:{
			passwordL: { required:true,min:6 }
		},
		 messages: {
		    passwordL: "Ingrese mas de 6 caracteres"	   
  		}

	});
	/*
	if(validacion.errorList.length==0)
	alert("Me dieron Click");
	*/
}
);

/*
metodo que permite hacer las validaciones en los campos del registro de usuario
*/
$("#registrarsubmit").click(function(){

	var validacion1 = $("#registroformu").validate({
		rules:{
			nombre:{ required:true, max:30}
			
		},
		 messages: {
		    nombre:"El nombre es obligatorio"
		   	
  		}

	});
	
	if(validacion1.errorList.length==0 && validacion2.errorList.length)
	alert("Registro Insatisfatorio");
	
}
);
