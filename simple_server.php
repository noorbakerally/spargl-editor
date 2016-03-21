<?php
	$format = "TTL";
	$PATH = "/home/nbakeral/repositories/github/sparql-generate-jena/target/spargl-generator-0.10-SNAPSHOT.jar -qs ";
         if (isset($_REQUEST['query'])) {
	 	$query = $_REQUEST['query'];
		$query = str_replace("\"","\\\"",$query);
	}
	if (isset($_REQUEST['format'])){
		$format = $_REQUEST['format'];
	}
	$q_str = "java -jar ".$PATH."\"".$query."\" -f ".$format;
	$results = shell_exec($q_str);
	$final = explode('RDF Output from SPARGL:', $results);
	echo $final[1];

?>
