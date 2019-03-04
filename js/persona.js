$.post(baseurl+"cciudad/getCiudades",
	{
		"sitReg":1
	},
	//callback lo que nos devuelve el metodo
	function (data){
		var c = JSON.parse(data);
		$.each(c,function(i,item){
			$('#cboCiudades').append('<option value="'+item.idCiudad+'">'+item.ciudad.toUpperCase()+'</option>');
		});
		//alert(data);
});

$('#cboCiudades').change(function(){
	$('#cboCiudades option:selected').each(function(){
		var id = $('#cboCiudades').val();
		alert (id)
		//para hacer un combo anidados apuntamos a otro metodo que traiga los id
		//$.post(); lo mismo que arriba
	

	});
});

$('#btnGetPersonas').click(function(){
	
	$('#tblPersonas').html(
				'<tr>'+
	              '<th style="width: 10px">#</th>'+
	              '<th>Nombre</th>'+
	              '<th>Paterno</th>'+
	              '<th>Materno</th>'+
	              '<th>DNI</th>'+
	              '<th>Ciudad</th>'+
	            '</tr>'
	            );

 	$.post(baseurl+"cpersona/getPersonas",
	function (data){
		var p = JSON.parse(data);
		$.each(p,function(i,item){
			$('#tblPersonas').append(
				'<tr>' +
				'<td>1</td>'+
				'<td>' + item.nombre + '</td>'+
				'<td>' + item.app + '</td>'+
				'<td>' + item.apmaterno + '</td>'+
				'<td>' + item.dni + '</td>'+
				'<td>' + item.ciudad + '</td>'+
				'</tr>');
		});
		
	//alert(data);
		});
});
