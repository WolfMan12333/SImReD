<?php
	$output = shell_exec("less +F /var/log/apache2/error.log.1 2>&1");
	echo "<pre> $output </pre>";
?>
