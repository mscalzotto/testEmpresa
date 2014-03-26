$(document).ready(function() {
	showProperSelect();
	updateInputHiddenValues();
});

function showProperSelect() {
	$(document).change(function() {
		if ($('select.agregarArea').val() === "Programador") {
				$('select.agregarTipoDisenador').hide();
				$('select.agregarLenguaje').show();
		}
		else if ($('select.agregarArea').val() === "Disenador") {
			$('select.agregarLenguaje').hide();
			$('select.agregarTipoDisenador').show();
		}
	});
}

function updateInputHiddenValues() {
	$('select').change(function() {
		switch ($(this)[0].name) {
			case 'agregarLenguajeSelect' :
				$('input[name="agregarLenguajeHidden"]').attr('value', $(this)[0].value);
				$('input[name="agregarTipoDisenadorHidden"]').attr('value', null);
				break;
			case 'agregarTipoDisenadorSelect' :
				$('input[name="agregarTipoDisenadorHidden"]').attr('value', $(this)[0].value);
				$('input[name="agregarLenguajeHidden"]').attr('value', null);
				break;
		}
	});
}