$(obtener_registros());

function obtener_registros(comunidades)
{
	$.ajax({
		url : 'consultaSearch.php',
		type : 'POST',
		dataType : 'html',
		data : { comunidades: comunidades},
		})

	.done(function(resultado){
		$("#tabla_resultado").html(resultado);
	})
}

$(document).on('keyup', '#busqueda', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_registros(valorBusqueda);
	}
	else
		{
			obtener_registros();
		}
});