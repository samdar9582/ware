<?php
    include "db.php"; // 데이터 베이스 접속 프로그램 불러오기
	
	$id = $_POST["id"];
	$type = $_POST["type"];
	$depart = $_POST["depart"];
	$worker = $_POST["worker"];
	$subject = $_POST["subject"];
    $nse_content = $db->escape_string($_POST['ir1']);

    $sql = "insert into nse_test(id, type, depart, worker, subject, content) values ('$id', '$type', '$depart', '$worker', '$subject','$nse_content')";
    $res = $db->query($sql);
 
    if($res){
        //입력 성공시
		echo ("<script>location.replace('index.php');</script>");
    } else{
        echo "fail"; // 디비 입력 실패시 fail표시
    }

	$db->set_charset('utf8');
?>