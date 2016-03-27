<?php
require_once("class.ajax.php");
$aF= new  AjaxFunc();
$aF->steer("right","1");
$aF->blink("1","2");
$aF->drive("forward","3");
/*
* 18 Engine backward
* 23 Engine Forward
* 24 Steer left
* 25 Steer right
* 17 Led 1
* 27 Led 2
*/
//shell_exec("python cleanup.py");
//shell_exec("gpio -g mode 17 out");
//shell_exec("gpio -g mode 27 out");
//while(1){        
	//shell_exec("gpio -g write 17 1");
	//shell_exec("gpio -g write 27 1");
	//sleep(1);
//	shell_exec("gpio -g write 17 0");
//	shell_exec("gpio -g write 27 0");
//}
		//$gpio_on=shell_exec("gpio -g write 27 1");
		//sleep(0.5);
		//shell_exec("gpio -g write 27 0");
?>

