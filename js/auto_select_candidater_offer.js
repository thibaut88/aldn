function chooseOffer(offer){

	var $member =$('#membre');
	var $opt =$member.find("option");
	
	$opt.each(function(){
		if($(this).attr('value')==offer){
			$(this).attr('selected','selected');
			var $elem =$(this);
			$elem.addClass('bg-danger');
			console.log($elem);
		}
	});

}
