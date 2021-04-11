$('.sort').change(function(e) {
	
	let val = $(this).val();
	if(val == 'name'){
		$.post("sort.php",{value : $(this).val()},function(data){
			$('.products').html(data);
		});
	}
	else if (val == 'data') {
		$.post("sort.php",{value : $(this).val()},function(data){
			$('.products').html(data);
		});
	}
	else if (val == 'user') {
		$.post("sort.php",{value : $(this).val()},function(data){
			$('.products').html(data);
		});
	}
	else if (val == 'otziv') {
		$.post("sort.php",{value : $(this).val()},function(data){
			$('.products').html(data);
		});
	}
});
