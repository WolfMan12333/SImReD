<?php
	if(isset($_POST['target']))
	{
		$target = $_POST['target'];
		$wgeo = shell_exec("geoiplookup $target | grep -w \"GeoIP City\" | awk '{print $12}' | sed 's/,$//'");
		echo "$wgeo";
	}
?>
