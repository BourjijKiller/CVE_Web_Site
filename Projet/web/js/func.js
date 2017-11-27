;(function () {
	$('input[name="planche1h"]').change(function () {
		if (this.value == 'oui') {
			$('#planche1h').text('3€');
			$(this).attr('checked', true);
		} else if (this.value == 'non'){
			$('#planche1h').text('10€');
			$(this).attr('checked', true);
		} else {
			$('#planche1h').text('0€');
			$(this).attr('checked', true);
		}
	});

	$('input[name="planche2h"]').change(function () {
		if (this.value == 'oui') {
			$('#planche2h').text('5€');
			$(this).attr('checked', true);
		} else if (this.value == 'non') {
			$('#planche2h').text('14€');
			$(this).attr('checked', true);
		} else {
			$('#planche2h').text('0€');
			$(this).attr('checked', true);
		}
	});

	$('input[name="laser2-3h"]').change(function () {
		if (this.value == 'oui') {
			$('#laser2-3h').text('7€');
			$(this).attr('checked', true);
		} else if (this.value == 'non') {
			$('#laser2-3h').text('20€');
			$(this).attr('checked', true);
		} else {
			$('#laser2-3h').text('0€');
			$(this).attr('checked', true);   
		}
	});

	$('input[name="laserpico"]').change(function () {
		if (this.value == 'oui') {
			$('#laserpico').text('7€');
			$(this).attr('checked', true);
		} else if (this.value == 'non') {
			$('#laserpico').text('20€');
			$(this).attr('checked', true);
		} else {
			$('#laserpico').text('0€');
			$(this).attr('checked', true);
		}
	});

	$('input[name="funboard"]').change(function () {
		if (this.value == 'oui') {
			$('#funboard').text('7€');
			$(this).attr('checked', true);
		} else if (this.value == 'non') {
			$('#funboard').text('20€');
			$(this).attr('checked', true);
		} else {
			$('#funboard').text('0€');
			$(this).attr('checked', true);
		}
	});

	$('input[name="hobiecat13"]').change(function () {
		if (this.value == 'oui') {
			$('#hobiecat13').text('7€');
			$(this).attr('checked', true);
		} else if (this.value == 'non') {
			$('#hobiecat13').text('20€');
			$(this).attr('checked', true);
		} else {
			$('#hobiecat13').text('0€');
			$(this).attr('checked', true);
		}
	});

	$('input[name="420_2-3h"]').change(function () {
		if (this.value == 'oui') {
			$('#420_2-3h').text('10€');
			$(this).attr('checked', true);
		} else if(this.value == 'non') {
			$('#420_2-3h').text('30€');
			$(this).attr('checked', true);
		} else {
			$('#420_2-3h').text('0€');
			$(this).attr('checked', true);
		}
	});

	$('input[name="declic2-3h"]').change(function () {
		if (this.value == 'oui') {
			$('#declic2-3h').text('10€');
			$(this).attr('checked', true);
		} else if(this.value == 'non') {
			$('#declic2-3h').text('35€');
			$(this).attr('checked', true);
		} else {
			$('#declic2-3h').text('0€');
			$(this).attr('checked', true);   
		}
	});

	$('input[name="optimist2-3h"]').change(function () {
		if (this.value == 'oui') {
			$('#optimist2-3h').text('10€');
			$(this).attr('checked', true);
		} else if(this.value == 'non') {
			$('#optimist2-3h').text('35€');
			$(this).attr('checked', true);
		} else {
			$('#optimist2-3h').text('0€');
			$(this).attr('checked', true);
		}
	});

})();