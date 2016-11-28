$(function(){
							// Script pour le bouton avatar			
							var $avatar = $( "input:file" );
							$avatar.before( "choisir une image" );
							
							$avatar.change(function (){
								var fileName = $(this).val();
								$avatar.parent().after(fileName);
								 //Liste des extensions valides
								var $extensions_valides = Array( 'jpg' , 'jpeg' , 'gif' , 'png', 'bmp' );
								var $indexExt = fileName.indexOf(".");
								var ext = "";
								for(var i=$indexExt+1; i<fileName.length; i++){
									ext += fileName[i];
								}
								 var ext2 = $extensions_valides.indexOf(ext);
								if (ext2 === -1) {
								  var extError = "extension non valide !!";
								  $avatar.parent().parent().after(extError);
								  counterError++;
								}else{
								counterError=0;
								}					
							});
});