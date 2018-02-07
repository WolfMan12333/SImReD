<?php
	if(isset($_POST['target']))
	{
		$target = $_POST['target'];
		if($target == "h")
		{
			$value = shell_exec("crontab -l");
			echo "$value";
		} else{
			//$out = explode(" ", $target);
			//$o = $out[6];
			//shell_exec("sed -i '/$o$/d' jobs");
			//$out = shell_exec("echo \"$target\" >> jobs.txt");
			//echo "$out";
			//$output = shell_exec("crontab -e");
			//echo "$output";
			exec('crontab -r', $target);
			$output = "/var/www/html/login/jobs";
			exec('echo -e "`crontab -l`\n'.$target.'" | crontab -', $output);
		}
	}
?>
