$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
});


$(document).ready(function()
{

	var titleTimeout;
	var errors = [false, false];

	$("#title").keyup(function()
	{
		titleTimeout = setTimeout(function(data)
			{
	            $.ajax({
	              dataType: 'JSON',
	              type: 'POST',
	              url: 'ajax/pengumuman-judul',
	              data:
	              {
	                'title' : toTitleCase($("#title").val()),
	              },
	              success: function(data)
	              {
	              		if(data.status == "ada")
	              		{
	              			$("#error").append('<div id="alert-title-error" class="alert alert-danger errors" hidden><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Pengumuman sudah ada, masukkan judul yang berbeda.</div>')
	              			$("#alert-title-error").show("slow");
	              			$("#submit").addClass("disabled")
	              		}

	              		else if(data.status == "tidakada")
	              		{
	              			if($("#alert-title-error").length == 0)
	              				$("#submit").removeClass("disabled")
	              			else
	              			{
	              				$("#alert-title-error").hide("slow", function(){$(this).remove()});
	              			}
	              		}
	              }
	            })
			}, 1500);
	})

	$("#title").keydown(function()
	{
		clearTimeout(titleTimeout)
	})

	$(".close").click(function ()
	{
    	$(this).parent().fadeOut('slow');
	});


	$('#attachment').bind('change', function()
	{
		if(this.files[0].size > 7000000)
		{
		alert("ukuran file terlalu besar. Maksimal 7 MB !");
		$(this).val("")			
		}


	});
})

function toTitleCase(str)
{
    return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
}
