$(function(){

	// Lista de Familias
	$.post( 'familia.php' ).done( function( respuesta )
	{
		$( '#familias' ).html( respuesta );
	});

	// lista de Tipos	
	$('#familias').change(function()
	{
		var la_familia = $(this).val();
		
		// Lista de Tipos
		$.post( 'tipo.php', { familia: la_familia} ).done( function( respuesta )
		{
			$( '#tipos' ).html( respuesta );
		});
	});

	// Lista de Ciudades
	$( '#familias' ).change( function()
	{
		var familia = $(this).children('option:selected').html();
		alert( 'Lista de Ciudades de ' + tipo );
	});	

})
