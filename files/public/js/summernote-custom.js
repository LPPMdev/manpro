$("#save").hide();
$("#cancel").hide();

$(document).ready(function()
{
	var before;
	$("#edit").click(function()
	{
		$("#summernote").summernote
		({
			  height: 400,                 // set editor height
			  minHeight: null,             // set minimum height of editor
			  maxHeight: null,             // set maximum height of editor
			  focus: true                  // set focus to editable area after initializing summernote
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