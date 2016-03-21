function generate(){
	query_text = $("#query").val();
	format = $("#format").val();
	$("#results").hide();
	$("#loading").show();
	$.ajax({
	  method: "POST",
	  url: "http://ci.emse.fr/sparql-generate/simple_server.php",
	  data: { query: query_text,format:format}
	})
	  .done(function( msg ) {
	  	$("#results").show();
	  	$("#result").val(msg);
	  	$("#loading").hide();
	});
}

function reset(){
	$("#query").val("");
}
