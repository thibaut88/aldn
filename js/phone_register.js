$(function(){
		
		var $phone = $(':input[name=phone]');
		
		$phone.on('blur', function(){
								
									var $type = typeof($(this).val());
									var $valeur= $(this).val();
									var counterror = 0;
									//boucle sur la chaine phone
									for(var i =0;i<$valeur.length;i++){
										if(
										($valeur[i] == '0') ||
										($valeur[i] == '1') ||
										($valeur[i] == '2') ||
										($valeur[i] == '3') ||
										($valeur[i] == '4') ||
										($valeur[i] == '5') ||
										($valeur[i] == '6') ||
										($valeur[i] == '7') ||
										($valeur[i] == '8') ||
										($valeur[i] == '9') 
										){
										}else{
											counterror++;
											var isInt=false;													
										}
									}
							});
									//Si compteur > 0 ou isint = false
									if((counterError > 0) ||( isInt == false)){
										 errors["num"] = '<p class="ErrorNum"><small>Entrez un numéro valide</small></p>';
										$phone.after(errors['num']);
										counterError++;
									}else{
										$('p.ErrorNum').fadeOut().hide();
										 errors["num"]=undefined;
										counterError=0;			
									}
										
});