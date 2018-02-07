<?php
	if(isset($_POST['target']))
	{
		$target = $_POST['target'];
		$output = shell_exec("geoiplookup $target");
		echo "<pre>$output</pre>";
	}
?>
