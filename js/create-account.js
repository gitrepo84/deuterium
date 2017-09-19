$(document).ready(function(){
	
	alert('function asa');
	$('#create-account').each(function() { this.reset() });
	
	$(document).on('submit', '#create-account', function(){
	var data = new FormData($(this)[0]);

	if($(".list-unstyled").length == 0){
	$.ajax({
		  type : 'POST',
		  url  : 'Create_Account.php',
		  data : data,
		  async: true,
		  cache: false,
		  contentType:false,
		  processData: false,
		  success :  function(response){
		  	alert(response);
			if(response==="OK"){
					$(window).scrollTop(0);
					if (!($("#sl_success_alert").length > 0)){	
						console.log("add");
						$('#message-placeholder').before('<div class="alert alert-success alert-success-style hidden" role="alert" id="sl_success_alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><span class="glyphicon glyphicon-exclamation-sign"></span><span id="sl_success_msg"></span></div>');
					}					
					$('#sl_success_alert').removeClass('hidden');
					$("#sl_success_msg").html(" We received your request. We will get back to you soon!!");				
				
			}}		 
	});}
	   return false;
      });
	 });