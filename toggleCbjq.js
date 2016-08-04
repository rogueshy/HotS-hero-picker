$(document).ready(function () {
	$(".meta").change(function () {
		var className = $(this).val();
		if (this.checked == true) {
			$('.' + className).each(function() {
				$(this).prop('checked', true);
			});
		}	else {
				$('.' + className).each(function () {
					$(this).prop('checked', false);
				});
		}
	});
});