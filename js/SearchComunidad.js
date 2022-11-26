aData = {}
$("#buscarComunidad").autocomplete({
	source: function(request,response){
		$.ajax({
			url: 'http://localhost/GitHub/CimaCommunity/conexionBusqueda.php',
			type:'GET',
			dataType: 'json',	
			success: function(data){
				aData = $.map(data,function(value,key){
					return{
						idcomunidad:value.idcomunidad,
						nombre:value.nombre,
					};
				});
				var results = $.ui.autocomplete.filter(aData,request.term);
				response(results);
			}
		})
	}
});