$(document).ready(function(){
	
		var anims =[
		'animated fadeIn',
		'animated bounce',
		'animated fadeOut',
		'animated fadeInDown',
		'animated swing',
		'animated tada',
		'animated bounceIn',
		'animated hinge',
		'animated bounceInLeft',
		'animated pulse',
		'animated flipInX',
		'animated zoomIn'
		];
		var elems= $('.partenaire');
		var taille = elems.length;
		var i = 0;

			elems.each(function()
			{
				$(this).css('opacity',0);
			});
				
		var time = setInterval(function(){ 

				if( i==(taille-1)){
					clearInterval(time);
				}
				// animRandom($(elems[i]));
				animerPartenaire($(elems[i]));
				i++;
			}
			, 150);
		time;
		function animerPartenaire(e){
			$(e).addClass('animated zoomIn zoomInDown');
			$(e).css('opacity','1');

		}
		function animRandom(e){
				var Rand = Math.floor((Math.random() * taille) + 1);
				$(e).css('visibility','visible').addClass(animsTwo[Rand]);
		}


});