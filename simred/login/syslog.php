<?php
	$output = shell_exec("less +F /var/log/syslog 2>&1");
	echo "<pre>$output</pre>";
?>
