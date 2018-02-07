<?php
	$output = shell_exec("less +F /var/log/user.log.1 2>&1");
	echo "<pre>$output</pre>";
?>
