$.post(baseurl+"cciudad/getCiudades",
	{sitReg:1},
	function(data){
		var obj = JSON.parse(data);
		output='';
		var estilo = 'width:100px;height:100px;background:red; border-radius:50%;';
		$.each(obj,function(i,item){

			output+= '<li>'+
		            '<div style="'+estilo+'" class="clsCiudad"></div>'+
		            '<input type="text" style="width:50%" value="'+ item.ciudad+'" class="clsNombreCiudad">'+
		            '<a class="users-list-name itemIdCiudad" href="#" id="'+item.idCiudad+'">'+item.ciudad+'</a>'+
		            '<span class="users-list-date" >'+item.idCiudad+'</span>'+
		            '</li>';
		});

		$('#listCiudades').html(output);

		$('#listCiudades .clsCiudad').click(function(){
			var i = $('.clsCiudad').index(this);
			var nc =$('.clsNombreCiudad:eq('+i+')').val();
			alert(nc);
		});
		$('#btnGrabar').click(function(){
			//como recorremos todos es desde cero
			var i = 0;
			$('#listCiudades .clsNombreCiudad').each(function(){
				var nc = $('.clsNombreCiudad:eq('+i+')').val();
				var idc = $('.itemIdCiudad:eq('+i+')').attr('id');
				console.log(nc+" - "+idc );

				
				//alert(idc);

				$.post(baseurl+"cciudad/grabarCiudad",
					  { 
					  	ciudad:nc,
					  	idCiudad:idc
					  },
					  function(data){
						//alert(data);
					  }
				);

				i++;
			});

		});

	}
);