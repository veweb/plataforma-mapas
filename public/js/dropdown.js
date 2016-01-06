$("#pais").change(function(event){
	$.get("/mdepartamentos/"+event.target.value+"",function(response,departamento){
		$("#departamento").empty();
		for(i=0;i<response.length;i++){
			$("#departamento").append("<option value='"+response[i].id+"'> "+response[i].nombre + "</option>");
		}
	});
});

$("#departamento").change(function(event){
	$.get("/mmunicipios/"+event.target.value+"",function(response,municipio){
		$("#municipio").empty();
		for(i=0;i<response.length;i++){
			$("#municipio").append("<option value='"+response[i].id+"'> "+response[i].nombre + "</option>");
		}
	});
});

$("#municipio").change(function(event){
	$.get("/lugares/"+event.target.value+"",function(response,lugar){
		$("#lugar").empty();
		for(i=0;i<response.length;i++){
			$("#lugar").append("<option value='"+response[i].id+"'> "+response[i].nombre + "</option>");
		}
	});
	
});

$("#municipio_id").change(function(event){
	$.get("/lugares/"+event.target.value+"",function(response,mapa_id){
		$("#mapa_id").empty();
		for(i=0;i<response.length;i++){
			$("#mapa_id").append("<option value='"+response[i].id+"'> "+response[i].nombre + "</option>");
		}
	});
	
});

$("#lugar").change(function(event){
	
    $.get("/categorias/"+event.target.value+"",function(response,categoria){
		$("#categoria").empty();
		
		for(i=0;i<response.length;i++){
			$("#categoria").append("<option value='"+response[i].id+"'> "+response[i].nombre + "</option>");
		}
	});	

    $('#zoom_container').html("<img id=yourImageID src=/images/upload/mapas/izabal.jpg width=1024px height=768px />");
    		$('#yourImageID').smoothZoom('addLandmark', 
			[
			'<div class="item lable" data-show-at-zoom="100" data-position=8200, 200">\
				<div>\
				<strong>Lable New 1</strong>\
				</div>\
			</div>'
			
			,
			
			'<div class="item mark" data-show-at-zoom="120" data-position="600,200">\
				<div>\
					<div class="text">\
					<strong>Pin 1</strong>\
				</div>\
				<img src="images/pin.png" width="50px" height="40px" alt="mark 1" />\
				</div>\
			</div>'
			]
		);
        $('#yourImageID').smoothZoom({
    			width: '100%',
	            height: 580,
	            initial_ZOOM: 110, 
	            button_MARGIN:80,   
	            pan_BUTTONS_SHOW: "YES",
	            pan_LIMIT_BOUNDARY: "NO",
	            button_SIZE: 24,
	            button_ALIGN: "top left", 
	            zoom_MIN: 40, 
	            zoom_MAX: 700,
	            border_TRANSPARENCY: 0,
	            container: 'zoom_container',
	            
	            /******************************************
	            Enable Responsive settings below if needed.
	            Max width and height values are optional.
	            ******************************************/
	            responsive: false,
	            responsive_maintain_ratio: true,
	            max_WIDTH: '',
	            max_HEIGHT: ''	

    			  });        
	
});