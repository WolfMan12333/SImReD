<?php
	$output = shell_exec("less +F /var/log/kern.log 2>&1");
	echo "<pre>$output</pre>";
?>
