$("#save").hide();
$("#cancel").hide();

$(document).ready(function()
{
	var before;
	$("#edit").click(function()
	{
		$("#summernote").summernote
		({
			  height: 400,                 
			  minHeight: null,             
			  maxHeight: null,             
			  focus: true                  
			});

		before = $("#summernote").html();
		console.log(before)

		$("#edit").toggle();
		$("#save").toggle();
		$("#cancel").toggle();
		$("html, body").animate({ scrollTop: 0 }, 600);
        return false;
	})

	$("#cancel").click(function()
	{
		$("#edit").toggle();
		$("#cancel").toggle();
		$("#save").toggle();
		$("#summernote").summernote("destroy")
		$("#summernote").html(before)
	})

	$("#save").click(function()
	{
		$("#edit").toggle();
		$("#cancel").toggle();
		$("#save").toggle();
		$("#summernote").summernote("destroy")
	})
})