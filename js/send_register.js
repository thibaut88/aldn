$(function(){
	
							//envoi formulaire
							$('form').submit(function(e){
									if(counterError !== 0){
										e.preventDefault();
										for(var key in errors){
											$register.after(errors[key]);
										}
									}
							});//submit form
});