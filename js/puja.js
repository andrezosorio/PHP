/*
metodo que permite realizar las validaciones en los campos del registro de puja
*/
$("#subasta").click(function(){

	var validacion = $("#formulario1").validate({
		rules:{
			nombre: { required:true },
			descripcion: { required:true },
			precio: { required:true , number:true},
			tiempo: { required:true , number:true},
			dentrega: { required:true }

		},
		 messages: {
		 	nombre: "El nombre es obligatorio",
		    descripcion: "La descripcion es obligatorio",
		    precio: "El precio es obligatorio y deben ser números",
		    tiempo: "El tiempo es obligatorio",
		    dentrega: "El tiempo de entra es obligatorio"
  		}

	});
	/*
	if(validacion.errorList.length==0){
		alert("Registro Fallido");
	}*/
	
	
}
);


