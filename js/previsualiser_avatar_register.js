$(function(){
	
		var $avatar = $( "input:file" );
				
		$avatar.on('change',function(){
	
			var e = this;
			var file = e.files[0];
			var nom = e.nom;
			var type=e.type;
			var taille =e.size;
			var date =e.lastModifiedDate;
		
			var reader = new FileReader();
					
			reader.addEventListener('load', function() {
    
			var imgElement = document.createElement('img');
			imgElement.style.display = 'inline-block';
			imgElement.style.width = "100%";
			imgElement.style.height= "100%";			
			imgElement.style.margin= "10% 0 10% 0";			
			imgElement.src = this.result;
			$('#contentAvatar').addClass('animated fadeInDown').html(imgElement).fadeIn('slow' ,function(){
			
			$('#contentAvatar img ').css('transition','border 0.85s')
			.css('borderRadius','9px')
			.css('borderLeft','5px solid rgba(200,50,0,0.95)')
			.css('borderTop','5px solid rgba(200,50,0,0.95)')
			.css('borderRight','5px solid rgba(200,50,0,0.95)')
			.css('borderBottom','5px solid rgba(200,50,0,0.95)')
			.css('padding','10%')
			.css('boxShadow','0px 2px 1px 1px rgba(20,150,0,0.8');
				
			});

			
			});
			
			 reader.readAsDataURL(file);
		});	
		
});