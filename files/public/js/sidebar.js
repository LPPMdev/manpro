$(document).ready(function()
{
	$(".klik").click(function(){
		$(".btn-pref .btn").removeClass("btn-coklat").addClass("btn-default").css('color', 'black');
	    // $(".tab").addClass("active"); // instead of this do the below 
	    $(this).removeClass("btn-default").addClass("btn-coklat").css('color', 'white'); 
	})
});