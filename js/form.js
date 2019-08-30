jQuery(document).ready(function(){
	
});
var messageShow = false;
jQuery(function(){
	jQuery('#commentForm').validate({
	    submitHandler: function(form) {
	        $.ajax({
	            url: form.action,
	            type: form.method,
	            data: $(form).serialize(),
	            success: function(response) {
		            var data_array = $.parseJSON(response);
		            var resultq = data_array["resultUser"]["success"];
		            var resultq2 = data_array["resultUser"]["messageQuery"];
		            if(resultq)
		            {
			            jQuery(".message-form").html("Usuario Creado");
			            clearForm();
			            messageShow = true;
		            }
		            else
		            {
			            jQuery(".message-form").html(resultq2);
			            messageShow = true;
		            }
		            console.log("resultq = "+resultq+" = "+resultq2);
	            }            
	        });
	    }
	});
});

function clearForm()
{
	jQuery("#commentForm .inputForm").val("");
	jQuery(".cmxform .error").css("display", "none");
}

jQuery(function(){
	jQuery("#commentForm .inputForm").on('keyup', function (e) {
	    if (e.keyCode === 13) {
	        console.log("key focus");
	    }
	    else
	    {
		    if(messageShow)
		    {
			    jQuery(".message-form").html(' ');
		    }
		    console.log("key no focus");
	    }
	});
});


