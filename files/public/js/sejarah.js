$(document).ready(function()
{
	$("#edit").click(function()
	{
		$("#content").toggle();
		$("#summernote").summernote
		({
			  height: 400,                 // set editor height
			  minHeight: null,             // set minimum height of editor
			  maxHeight: null,             // set maximum height of editor
			  focus: true                  // set focus to editable area after initializing summernote
			});
		
		$("#summernote").summernote('code',$("#content").html());
		$("#editor").toggle();
		$("#edit").toggle();
		return false;		
	})

	$("#cancel").click(function()
	{
		alert("asu")
		$("#summernote").summernote("destroy");
		$("#content").toggle();
		$("#editor").toggle();
		$("#edit").toggle();	
	})
})