$(document).ready(function() {
	getJsonData();
});

function getJsonData(){
	$.ajax({
	    type: "POST",
	    async: false,
	    url: document.location.href + "ajax.php",
	    dataType: 'json',
	    error: function(){
	        alert('Error loading ' + document.location.href + "ajax.php");
	    },
	    success: function(data){
	    	fillSelectElements(data);
	    } 
	});
}

function fillSelectElements(json) {
	console.log(json.disenador.categoria);
}

