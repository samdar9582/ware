<?php
	include "db.php";
	header('Content-Type: text/html; charset=utf-8');

	$bno = $_GET["id"];
		if(isset($_GET["id"])){
			$bno = $_GET["id"];
	}
	$sql = mq("delete from nse_test where id='$bno';");
	echo "<script>alert('삭제되었습니다.');</script>";
?>
<meta http-equiv="refresh" content="0 url=index.php" />

