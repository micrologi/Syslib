	 var timer = null; 
	 function openContent(trigger,divID){ 
	 	$('#divImage div').hide();
	 	$('#'+divID).fadeIn('slow');
	 	if(timer != null) clearTimeout(timer);
		timer = setTimeout( 
		  function(){		
			var nextAnchor = ($(trigger).next('a').text() == '') ? $('#divTrigger a:first') : $(trigger).next('a');
			nextAnchor.click();
		  }, 10000
		);
	 }	 
	 $(document).ready(
	  	function(){
	  		openContent($('#firstSlide'),'div1');			
		}
	 )