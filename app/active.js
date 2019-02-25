 $(function () {
 	$('select[multiple].active.1col').multiselect({
 		columns: 1,
 		placeholder: 'Select States',
 		search: false,
 		selectAll: false,
 	});

 });

 $('#info').on('show.bs.modal', function (e) {
 	$('#surname_text').text($(e.relatedTarget).data('surname'));
 	$('#firstname_text').text($(e.relatedTarget).data('firstname'));
 	$('#patronymic_text').text($(e.relatedTarget).data('patronymic'));
 	$('#birth_date_text').text($(e.relatedTarget).data('birth_date')); 
 	$('#table_number_text').text($(e.relatedTarget).data('table_number')); 
 	$('#city_text').text($(e.relatedTarget).data('city')); 
 	$('#lang_text').text($(e.relatedTarget).data('lang'));  
 	$('#skills_text').text($(e.relatedTarget).data('skills')); 
 });


