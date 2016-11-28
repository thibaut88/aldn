
				//MONTRER LES ARTICLES GRATUITS
				function showFree(){

					var $free = $('.non');
					var $buy = $('.oui');
					
					$buy.each(function(){
						console.log(this);
						$(this).fadeOut(250);
						
					});
					$free.each(function(){
						console.log(this);
						$(this).fadeIn(500);
						
					});
				}
				//MONTRER LES ARTICLES PAYANTS
				function showBuy(){

					var $free = $('.non');
					var $buy = $('.oui');
					
					$free.each(function(){
						$(this).fadeOut(250);
						
					});
					$buy.each(function(){
						$(this).fadeIn(500);
						
					});
				}
			
		