$(function(){
	var SliderModule = (function(){
	var pb = {};
	pb.el =$('#slider');
	pb.items = {
		panel: pb.el.find('li')
	}
		//variable importantes
		var SliderInterval,
			currentSlider=0,
			nextSlider = 1,
			lengthSlider = pb.items.panel.length;
			
		// inicia contructor
		pb.init = function(settings){
			//activar slider
		 SliderInit();
		// controles
			$('#slider-controls').on('click','li',function(e){
				var $this = $(this);
				if(currentSlider !== $this.index()){
					changePanel($this.index());
				}
			})
		}
		var SliderInit = function(){
			SliderInterval = setInterval(pb.startSlider, 3000);
			}
		pb.startSlider = function(){
			var panels = pb.items.panel,
				controls = $('#slider-controls li');
			
			if(nextSlider >= lengthSlider){
				nextSlider = 0;
				currentSlider = lengthSlider-1;
			}
			//efectos
			controls.removeClass('active').eq(nextSlider).addClass('active');
			panels.eq(currentSlider).fadeOut('slow');
			panels.eq(nextSlider).fadeIn('slow');
			
			// actualizamos datos
			currentSlider = nextSlider;
			nextSlider += 1;
		}
		//funcion para control del slider
		var changePanel = function(id){
			clearInterval(SliderInterval);
		var panels = pb.items.panel;
			controls = $('#slider-controls li');
		//comprobar id
		if(id>= lengthSlider){
			id=0;
		}else if(id<0){
			id=lengthSlider-1;
		}
		//efectos
		controls.removeClass('active').eq(id).addClass('active');	
		panels.eq(currentSlider).fadeOut('slow');
		panels.eq(id).fadeIn('slow');							   
		//actualizamos nuestros datos
		currentSlider = id;
		nextSlider = id+1;
		// reactivar slider
			SliderInit();
		}
	return pb;
	}());
	SliderModule.init();
	});
