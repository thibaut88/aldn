$(function(){
							var $inputs = $(':input');
							var $pass = $(':input[name=pass]');
							var $register = $(':input[name=register]');
							var $cpass = $(':input[name=cpass]');

							//input password
							$cpass.on('blur', function(){
									//si pass !== cpass
									if($cpass.val() != $pass.val()){
										 errors['pass']='<p class="errorPass"><small>les mot de passe ne correspondent pas</small></p>';
										$cpass.after(errors['pass']);
										 counterError++;
									//sinon si cpass == pass
									}else if($cpass.val() == $pass.val()){
										$('p.errorPass').fadeOut().hide();
										 errors['pass']=undefined;
										 counterError=0;
									}
							});
							//blur cpass
});