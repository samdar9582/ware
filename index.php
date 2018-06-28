<?php 
	include "db.php";
?>
<!doctype html>
<html lang="ko">
 <head>
  <meta charset="UTF-8">
  <title>게시판</title>
  <link rel="stylesheet" href="style.css" />
  <style>
	*{text-decoration:none;}
  </style>
 </head>
 <body>
 <div id="board_area"> 
	<table class="list-table" style="margin: auto;">
		<thead>
			<tr style="text-decoration: none";>
				<th width="70">번호</th>
				<th width="500">제목</th>
				<th width="120">글쓴이</th>
				<th width="100">구분</th>
				<th width="100">조회수<th>
			</tr>
		</thead>
		<?php
			$sql = mq("select * from nse_test");  
		while($nse_test = $sql->fetch_array()){
			$title=$nse_test["subject"]; 
						if(strlen($title)>30){ 
							$title=str_replace($nse_test["subject"],mb_substr($nse_test["subject"],0,30,"utf-8")."...",$nse_test["subject"]);
						}
				?>
		<tbody>
			<tr>
				<td width="70"><?=$nse_test['id']; ?></td>
				<td width="500"><a href="read.php?id=<?=$nse_test["id"];?><?=$title;?>">
				<?=strip_tags($nse_test["subject"]);?>
				</a></td>
				<td width="120"><?=$nse_test['worker']?></td>
				<td width="100"><?=$nse_test['type']?></td>
				<td width="100"><?=$nse_test['hit']; ?></td>
			</tr>
		</tbody>
		<?php } ?>
	</table>
	<table style="margin-left: 1170px;">
	<tr>
	<td>
	<form action="insert.php">
	<div>
		<button type="submit">글쓰기</button>
	</div>
  </form>
  </td>
  </tr>
  </table>
</body>
</div>
</html>