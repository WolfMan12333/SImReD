<?php
	if(isset($_POST['target']))
	{
		$target = $_POST['target'];
		$lgeo = shell_exec("geoiplookup $target | grep -w \"GeoIP City\" | awk '{print $11}' | sed 's/,$//'");
		echo "$lgeo";
	}
?>
