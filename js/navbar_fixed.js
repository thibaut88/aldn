
<script type="text/javascript">

/***
(function(){

	var onScroll = function(){
		

	var element = document.querySelector('#menu');
	if(element.getBoundingClientRect().top < 0){
		element.style.position="fixed!important";
		element.style.top="0";
	}
alert(elem);
	}
	
})()

***/
/***
(function($){
	
	
    $(document).ready(function(){
		var menuassoc = $('#associationId');
        var offset = $("#menu").offset().top;
        $(document).scroll(function(){
            var scrollTop = $(document).scrollTop();
            if(scrollTop > offset){
                $("#menu").css("position", "fixed");
                $("#menu").css("left", "0");
                $("#menu").css("top", "0");
                $("#menu").css("right", "0");
                $("#menu").css("z-index", "1000");
            }
            else {
                $("#menu").css("position", "static");

            }
        });
    });
})(jQuery);
****/
</script>