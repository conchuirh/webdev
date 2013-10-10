$(document).ready(function(){
	$('#btn').click(function(){
		$('#btn').after('<p><img src="http://i.qkme.me/3rh57x.jpg"></p>');
	});
	
	$('#btn2').click(function(){
        var toAdd = $('input[name=lrnItem]').val();
        $('.list').append('<div class= "item">' + toAdd + '</div>');
    });
    
    $(document).on('click', '.item', function(){
        $(this).remove();
    });
});