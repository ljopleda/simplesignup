$(function(){
	$('#inp-name').keypress(function(event){
		var regex = new RegExp("^[a-zA-Z0-9]+$");
	    var str = String.fromCharCode(!event.charCode ? event.which : event.charCode);
	    if (regex.test(str)) {
	        return true;
	    }
	    event.preventDefault();
	    return false;
	});
	$('#inp-birthday').keypress(function(event){
		var birthday = $(this).val();
		if(birthday.length<8){
			var num_birthday = birthday.replace(/-/g , '');
			if(num_birthday.length>0 && num_birthday.length%2==0){
				$(this).val(birthday+'-');
			}
			var regex = new RegExp("^[0-9]+$");
		    var str = String.fromCharCode(!event.charCode ? event.which : event.charCode);
		    if (regex.test(str)) {
		        return true;
		    }
		}
	    event.preventDefault();
	    return false;
	});
	$('#btn-export').click(function(){
		$('input[name=action]').val('exportData');
		$('#inp-name,#inp-birthday').attr('required',false);
	});
});