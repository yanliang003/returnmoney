<?php

echo ABORTED;







exit;
 //ignore_user_abort(true);
 //set_time_limit(0);
 
 while(1) {
		$f = "time_task.txt";
		if(!file_exists($f)){
		echo file_put_contents($f,"xxx");
		}
		$fp  = fopen($f,"a+");
		$str = date("Y-m-d h:i:s")."nr";
		fwrite($fp,$str);fclose($fp);
		sleep(5);
 }
?>