$('.collapse').on('shown.bs.collapse', function() {
	$(this).parent().find('.fa-plus').removeClass('fa-plus').addClass('fa-minus');
}).on('hidden.bs.collapse', function() {
	$(this).parent().find('.fa-minus').removeClass('fa-minus').addClass('fa-plus');
});

function yearsSince(dateString) {
	var dateDiff = new Date(Date.now() - new Date(dateString).getTime());
	var years = dateDiff.getFullYear() - 1970;
	return years != 1 ? years + ' years' : years + ' year';
}

$('.years-since').each(function() {
	$(this).html(yearsSince($(this).data('date')));
});