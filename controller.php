<?php 
	$base_path = "C:\\xampp\\htdocs\\test\\thermal_printer";

	exec("{$base_path}/PrintHtml/PrintHtml.exe recibo.html");
	echo "Acción Realizada";
?>