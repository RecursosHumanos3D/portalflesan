<<<<<<< HEAD

$('#modalButton').click(function(){
	$('#modal').modal('show')
	.find('#modalContent')
	.load($(this).attr('value'));
});

$('#modalButtons').click(function(){
	$('#modal1').modal('show')
	.find('#modalContent')
	.load($(this).attr('value'));
	var imgsrc = $(this).data('id');
	$('#my_image').attr('src',imgsrc);
});



function contarCaracteres(campo, campo_conteo, limite_maximo) {
	if(campo.value.length > limite_maximo){ // Si es muy largo, lo cortamos!
                         campo.value = campo.value.substring(0, limite_maximo); // Substring toma del principio, osea 0, hasta el limite máximo de caracteres.  
    } else { // Si no es más largo del máximo, actualizamos el contador de 'caracteres quedan'
                var limite = limite_maximo - campo.value.length;
                $('#contador').text("");
                $('#contador').append(limite);
                console.log(limite);
			}
}

function rotate(idPost) {

	$.get("index.php?r=rpost/rotate&idPost=" + idPost + "",
		function (dato) {
			$('#rotate-' + idPost).css('transform', 'rotate(' + dato + 'deg)');
			$('.rotate-' + idPost).css('transform', 'rotate(' + dato + 'deg)');
		}).fail(function () {
			swal("No existe conexion a internet");
            // Handle error here
        });
}
            	
function rotates(rutColaborador) {

	$.get("index.php?r=colaborador/rotate&rutColaborador=" + rutColaborador + "",
		function (dato) {
		//$("#rotate-" + idPost).css('transform', "deg(" + dato + ")");
		//$('#busniessmenu').css('background-color', '#323232');
		// $("#rotate-" + idPost).rotate(dato);
		$('#colaborador-' + rutColaborador).css('transform', 'rotate(' + dato + 'deg)');

		}).fail(function () {
        	swal("No existe conexion a internet");
            // Handle error here
		});
}

function contarCaracteress(campo, limite_maximo, id) {
	if(campo.value.length > limite_maximo){ // Si es muy largo, lo cortamos!
		campo.value = campo.value.substring(0, limite_maximo); // Substring toma del principio, osea 0, hasta el limite máximo de caracteres.  
	} else { // Si no es más largo del máximo, actualizamos el contador de 'caracteres quedan'
		var limite = limite_maximo - campo.value.length;
		$('#contadorc-comentario-'+id).text("");
		$('#contadorc-comentario-'+id).append(limite);

	}
}

function enviar(post, rut) {

	var comentario = $("#comentario-" + post + "").val();

	var valid;  
		if(/^\s*$/.test(comentario))
			valid = 1;
        else
            valid = 2;

    var dato = Boolean(comentario);
    var amigo = document.getElementById('amigo').value;

    if(amigo==rut){
    	var ca = $('#b').text();
        var c = document.getElementById('b');
        
        if(c!=null){
            c.innerHTML = parseInt(ca)+1;
        }
    }


	

        if (dato == true && valid == 2) {

            $.get("index.php?r=rpost/comentario&rutPersona=" + rut + "&idPost=" + post + "&comentario=" + comentario + "",
            	function (dato) {
            		
					var data = JSON.parse(dato);
            		

        



            		$('#' + post).html('<img class="img-circle img-sm"  style="-ms-transform: rotate(' + data.rotate + 'deg);-webkit-transform: rotate(' + data.rotate + 'deg);transform: rotate(' + data.rotate + 'deg);" alt="User Image"   src="../web/img/perfil/t/' + data.foto + '"><div class="comment-text"><span class="username">' + data.nombre + ' ' + data.apellidos + '<span class="text-muted pull-right">Ahora</span></span>' + comentario + '</div><div id="'+post+'" class="box-comment">');
            		document.getElementById(post).id = post+'old';
            		$("#comentario-" + post + "").val('');
            		var comentarioc = $('#comentarioc-'+ post).text();
            		var comenta = document.getElementById('comentarioc-'+ post);
            		comenta.innerHTML = parseInt(comentarioc)+1;

            		$("#post-" + post).css("display", "block");

            	}).fail(function () {
            		swal("No existe conexion a internet");
                // Handle error here
            	});

        } else {

            swal("Debe añadir un comentario");
        }

}

function reveal(idPost) {
	$("#post-" + idPost).css("display", "block");
}

function checkform(){
	var regex = "^\\s+$";
    cuca = document.cuca.rdescripcionPost.value;
    archivo = document.getElementById('rpost-file').value;


	if (cuca.match(/^\s*$/g) && archivo.length == ""){
        // something is wrong
        swal("Debes ingresar algún contenido");
        return false;
    }
    // If the script gets this far through all of your fields
    // without problems, it's ok and you can submit the form

    return true;
}


function like(idPost, rut) {

	$.get("index.php?r=rpost/like&rutPersona=" + rut + "&idPost=" + idPost + "",
		function (dato) {
			$("#like-" + idPost).css("color" , "#e8000a");
			$("#like-" + idPost).attr('onclick', " ");
			$("#like-" + idPost).html('<i class="fa fa-heart"></i>' + dato);
			var ca = $('#d').text();
			var c = document.getElementById('d');
			if(c!=null){
				c.innerHTML = parseInt(ca)+1;
			}



		}).fail(function () {
			swal("No existe conexion a internet");
            // Handle error here
        });


}




function eliminar(idPost) {

		$.get("index.php?r=rpost/eliminar&idPost=" + idPost + "",
			function (dato) {
				if(dato==true){
					swal("Su post ha sido eliminado")
					.then(function(value){
						location.reload();
					});
				}
				else{
					swal("No ha sido eliminado");
				}

			}).fail(function () {
				swal("No existe conexion a internet");
            // Handle error here
        	});


}

function compartir(idPost, rutColaborador) {

	$.get("index.php?r=rpost/compartir&idPost=" + idPost + "&rutColaborador="+rutColaborador+"",
		function (dato) {

			if(dato==true){

				swal("La publicacion se ha compartido").then(function(value){
				location.reload();
				});

			}else{

				swal("Ha ocurrido un problema intentelo nuevamente");

			}

			}).fail(function () {
				swal("No existe conexion a internet");
            // Handle error here
        	});


}
=======
   $('#modalButton').click(function(){
      $('#modal').modal('show')
              .find('#modalContent')
              .load($(this).attr('value'));
   });

     $('#modalButtons').click(function(){
      $('#modal1').modal('show')
              .find('#modalContent')
              .load($(this).attr('value'));
               var imgsrc = $(this).data('id');
 				$('#my_image').attr('src',imgsrc);
   });
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
