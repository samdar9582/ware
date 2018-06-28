<?php
include "db.php";

header('Content-Type: text/html; charset=utf-8');

	#$bno = ''; 
	#	if( isset( $_POST['id'])) {
	#		$bno = $_POST['id']; 
	#	} 
	#$bno = isset($_POST['id']) ? $_POST['id'] : '';
	$bno = $_GET["id"];
		if(isset($_GET["id"])){
			$bno = $_GET["id"];
	}
	$sql = mq("select * from nse_test where id='".$bno."'");
	$nse_test = $sql->fetch_array();

/* 조회수 카운트 */

	$hit = mysqli_fetch_array(mq("select * from nse_test where id ='".$bno."'"));
	$hit = $hit['hit'] + 1;
	$fet = mq("update nse_test set hit = '".$hit."' where id = '".$bno."'");


	?>
<!doctype html>
<html lang="ko">
 <head>
  <meta charset="UTF-8">
  <title>게시판</title>

  <link rel="stylesheet" href="test.css">
  <style>
  *{text-decoration:none;}
	div{display: inline-block; float: right}
	button{width:150px; height:50px;};
  </style>
  </head>
		<body>
			<table class="table" cellpadding="0" cellspacing="0" width="880" height="70%">
				<colgroup>
					<col style="width: 15%">
					<col style="width: 35%">
					<col style="width: 15%">
					<col style="width: 35%">
				</colgroup>
				<tr class="tr1">
					<td colspan=4 style="height:50px">문서열람</td>
				</tr>
				<tr>
					<td class="tr2">문서번호</td>
					<td><?php echo $nse_test['id'];?></td>
					<td class="tr2">기안일</td>
					<td>
					
					</td>
				</tr>
				<tr>
					<td class="tr2">조회수</td>
					<td>
						<?php echo $nse_test['hit'];?>
					</td>
					<td class="tr2">문서구분</td>
					<td>
						<?php echo $nse_test['type'];?>
					</td>
				</tr>
				<tr>
					<td class="tr2">기안자</td>
					<td>
						<?php echo $nse_test['worker'];?>
					</td>
					<td class="tr2">관리부서</td>
					<td>
						<?php echo $nse_test['depart'];?>
					</td>
				</tr>
				<tr>
					<td class="tr2">제목</td>
					<td colspan=3><?php echo $nse_test['subject'];?></td>
				</tr>
				<tr>
					<td class="tr2">내용</td>
					<td colspan=3 style="text-align:left; height:500px;">
					<?php echo $nse_test['content']; ?>
				</td>
				<tr>
					<td colspan="4">
						<div>
						<div style="margin-left:10px; margin-right:10px;">
						<button type="submit" onclick="location.href='index.php';"/>목록</button>
						</div>
						<div>
						<a href="delete.php?id=<?php echo $nse_test['id']; ?>"><button id="delete">삭제</button></a>
						</div>
						</div>
					</td>
				</tr>
		</table>
	</body>
</html>