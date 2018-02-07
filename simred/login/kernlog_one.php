<?php
	$output = shell_exec("less +F /var/log/kern.log.1 2>&1");
	echo "<pre>$output</pre>";
?>
