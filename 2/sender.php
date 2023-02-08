<?php
function sendProccess($source){
	$db = file_exists('feedback.dat') ? fopen('feedback.dat', 'w+') : fopen('feedback.dat', 'w');
	
	fwrite($db, $source['mail'] . '; '. $source['name'] . '; ' . $source['rating'] . '; ' . $source['comment'] . "\n");
	
	fclose($db);
}
?>
