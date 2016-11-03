
<script type="text/javascript">

$(document).ready(function(){
	
		var articles = $('.Article');
		var per_page = 3;
		var i = 0;
		articles.each(function(){
			
			if( i >= per_page){
				console.log(this);
				$(this).hide();

			}
			i++
			
		});
	
	
	
});
</script>