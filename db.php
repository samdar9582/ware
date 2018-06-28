<?php
	$db = new mysqli("localhost","root","","web");
	$db->set_charset("utf8");

		function mq($sql){
		global $db;
		return $db->query($sql);
	}

?>