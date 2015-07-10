

$(document).ready(function(e) {
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
          var uname = $("#username").val();
          var pwd = $("#password").val();
          
          $.post("admin-login-exec",
		{ "username":uname,"password":pwd },
                function(data){
			if(data==true){
				location.href="admin-register";
                        }else{
				$("#errorReturn").text(data);
                        }}
          );		
		
	});
});