<?php
//phpinfo();
$out=shell_exec('ls -lart');
echo "<pre>$output</pre>";

//shell_exec('whoami');
shell_exec(" sudo gpio -g mode 17 out");
shell_exec("sudo gpio -g mode 27 out");        
//	$setmode17=system("/sys/class/gpio -g mode 17 out");
	//while(TRUE){
        	$gpio_on=shell_exec("sudo gpio -g write 17 1");
		//sleep(0.1);
		$gpio_off=shell_exec("gpio -g write 17 0");
		//$gpio_on=shell_exec("gpio -g write 27 1");
		//sleep(0.5);
		//shell_exec("gpio -g write 27 0");
	//}
echo($gpio_on);
?>

