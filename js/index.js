$(document).ready(function() {
	showProperSelect();
});

function showProperSelect() {
	$(document).change(function() {
		if ($('select.agregarArea').val() === "programador") {
				$('select.agregarTipoDisenador').hide();
				$('select.agregarLenguaje').show();
		}
		else if ($('select.agregarArea').val() === "disenador") {
			$('select.agregarLenguaje').hide();
			$('select.agregarTipoDisenador').show();
		}
	});
}