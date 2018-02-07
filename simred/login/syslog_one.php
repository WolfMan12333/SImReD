<?php
	$output = shell_exec("less +F /var/log/syslog.1 2>&1");
	echo "<pre>$output</pre>"
?>
