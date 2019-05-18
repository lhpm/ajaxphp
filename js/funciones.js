function CRUD(o,id,res)
	{
		if(o=="LISTA")
		{
			var est = id;

			var ano = $('#busano').val();


			$.post('ajax/post2.php',
			{opcion:o,id:id,res:res,ano:ano},
			function(data)
			{
				$('#resultado').html(data);
				$('#msn').html(res);

				if (ano == "AS"){

					alert("SDFSDF");

				}

			})
		}

		if(o=="TODOS")
		{
			var est = id;
			//$("#tabla").html('<div id="loader-wrapper"><div id="loader"></div><div class="loader-section section-left"></div><div class="loader-section section-right"></div></div>'); 
			$.post('ajax/post2.php',{opcion:o,id:id,res:res},
			function(data)
			{
				$('#resultado').html(data);
			})
		}

		if(o=="NUEVO")
		{
			$('#btnguardar').attr('name','GUARDAR');
			$('#exampleModalLabel').html("Registro Nuevo Usuario");
		    $('#resultado').html('');
			var est = id;
			$.post('ajax/post2.php',{opcion:o,id:id,res:res},
			function(data)
			{
				$('#content').html(data);
				$('#msn').html(res);

			})
		}
		if(o=="GUARDAR")
		{

			alert("PRESIONE GUARDAR");

		    //$('#resultado').html('');
			//var est = id;
			//$.post('ajax/post2.php',{opcion:o,id:id,res:res},
			//function(data)
			//{
				//$('#resultado').html(data);
				//$('#msn').html(res);

			//})
		}

}