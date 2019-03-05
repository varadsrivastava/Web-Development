$(document).ready(function(){
	    var left = 200
	    $('#text_counter').text('Characters left: ' + left);

	        $('#ques').keyup(function () {

	        left = 200 - $(this).val().length;

	        if(left < 0){
	            $('#text_counter').addClass("overlimit");
	             $('#posting').attr("disabled", true);
	        }else{
	            $('#text_counter').removeClass("overlimit");
	            $('#posting').attr("disabled", false);
	        }

	        $('#text_counter').text('Characters left: ' + left);
	    });
	});
