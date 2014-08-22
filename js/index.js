$(document).ready(function() {
	showProperSelect();
});

function showProperSelect() {
	$(document).change(function() {
		if ($('select.agregarArea').val() === "1") {
				$('select.agregarTipoDisenador').hide();
				$('select.agregarLenguaje').show();
		}
		else if ($('select.agregarArea').val() === "2") {
			$('select.agregarLenguaje').hide();
			$('select.agregarTipoDisenador').show();
		}
	});
}