<?php

	$output = shell_exec("less +F /var/log/messages 2>&1");
	echo "<pre> $output </pre>";

?>
