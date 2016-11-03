
<script type="text/javascript">

$(document).ready(function(){
	
		var offers = $('.Offer');
		var left = $('#leftOffer');
		var right = $('#rightOffer');
		var per_page = 3;
		var i = 0;
		offers.each(function(){
			if( i >= per_page){
				console.log(this);
				$(this).hide();

			}
			i++ 
			});
			
			
		
		left.click(function(){
		var debut = 0;
		var fin = 3;
		
			offers.each(function(){
				if(debut>=fin){
						// $(this).css('display','none');
						$(this).fadeOut();
				}else{
						// $(this).css('display','block');
						$(this).fadeIn();
				}
				debut++
			});
		});	
			
		right.click(function(){
			debut = 3;
			fin = 6;
			
			offers.each(function(){
				if(debut>=fin){
						// $(this).css('display','none');
						$(this).fadeOut();
				}else{
						// $(this).css('display','block');
						$(this).fadeIn();
				}
				debut++
			});
		});			
			
		
});
</script>