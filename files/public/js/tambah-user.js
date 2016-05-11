$(document).ready(function()
{
	$("#retype-password").keyup(function()
	{
		if($("#password").val() != "" && $("#retype-password").val() != "")
			$("#submit").removeClass("disabled");	
		else  $("#submit").addClass("disabled");		
	})

	$("#password").keyup(function()
	{
		if($("#password").val() != "" && $("#retype-password").val() != "")
			$("#submit").removeClass("disabled");
		else  $("#submit").addClass("disabled");			
	})

})