//preparacion del DOM
$(document).ready(function(){
//validacion del formulario redes sociales
	$("#contact").validate({
		rules:{
			name: "required",
			phone:{
				required: true,
				digits: true
			},
			email:{
				required: true,
				email: true
			},
			subject: "required"			
		},
		messages:{
			name: "Campo requerido",
			phone:{
				required: "Campo requerido",
				digits: "Sólo números por favor"
			},
			email:{
				required: "Campo requerido",
				email: "Debe ser un email"
			},
			subject: "Ponga un mensaje"			
		},
		submitHandler: function(form){
			$.ajax({
				type:$(form).attr('method'),
				url:$(form).attr('action'),
				data:$(form).serialize(),
				beforeSend:function(){
					$("#alertaRegistro").html("<img src='images/cargando.gif'>");
                    $("#alertaRegistro").css("display", "block");
				},
				 success: function(data){
                    if (data == 1) {
                        $("#respuestaAltaV").show(200);
                        $("#alertaRegistro").css("display", "none");
                    }else{
                        $("#respuestaAltaFalso").show(200);
                        $("#alertaRegistro").css("display", "none");
                    }
                }    
			})
		}

	});
});