jQuery(document).ready(function(){
	
});

jQuery(function(){
	jQuery('#commentForm').validate({
	    submitHandler: function(form) {
	        $.ajax({
	            url: form.action,
	            type: form.method,
	            data: $(form).serialize(),
	            success: function(response) {
	                console.log("success true");
	                //$('#answers').html(response);
	            }            
	        });
	    }
	});
});



