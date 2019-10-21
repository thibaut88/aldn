<a id="retour_haut_page"class=" btn btn-default"href="javascript:void(0)">
	<i class="fa fa-arrow-up" aria-hidden="true"></i>
</a>

<script type="text/javascript">
$(function(){
	$("#retour_haut_page").css('position','fixed');
	$("#retour_haut_page").css('bottom','20px');
	$("#retour_haut_page").css('right','20px');
    $("#retour_haut_page").click(function(){ 
    	$("html, body").animate({scrollTop: 0},"slow");
    });
});
</script>