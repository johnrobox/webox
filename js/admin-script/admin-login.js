
$(document).ready(function() {
			$("#loginSubmit").click(function(){
                            $.blockUI({ css: { 
                            border: 'none', 
                            padding: '10px', 
                            backgroundColor: '#000', 
                            '-webkit-border-radius': '10px', 
                            '-moz-border-radius': '10px', 
                            opacity: .5, 
                            color: '#fff' 
                        } }); 

                        setTimeout($.unblockUI, 2000); 
                        
				var form_data = {
                                        username: $("#username").val(),
                                        password: $("#password").val()   
    };
					$.ajax({
						type:	"POST",
						url	:"admin-login-exec",
						data:	form_data,
						success: function(msg){
							$("#errorReturn").html(msg);
						}
						
					});
				
				return false;
			});
		});