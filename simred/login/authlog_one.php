<?php
	$output = shell_exec("less +F /var/log/auth.log.1 2>&1");
	echo "<pre>$output</pre>";
?>
