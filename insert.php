<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>네이버 스마트 에디터 적용하기</title>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.0/jquery.js"></script>
<script type="text/javascript" src="./se2/js/service/HuskyEZCreator.js" charset="utf-8"></script>
<script>
	funtion SetSelectBox(){
		var schField = $("#customSelect option:seleccted").text();
	}

	funtion SetSelectBox2(){
		var schField = $("#customSelect option:seleccted").text();
	}

	funtion SetSelectBox3(){
		var schField = $("#customSelect option:seleccted").text();
	}
</script>

<script type="text/javascript"> 
	function goPage() { location.href="index.php"; } 
</script>

<script language="javascript">
<!-- 
function dateSelect(docForm,selectIndex) {
	watch = new Date(docForm.year.options[docForm.year.selectedIndex].text, docForm.month.options[docForm.month.selectedIndex].value,1);
	hourDiffer = watch - 86400000;
	calendar = new Date(hourDiffer);

	var daysInMonth = calendar.getDate();
		for (var i = 0; i < docForm.day.length; i++) {
			docForm.day.options[0] = null;
		}
		for (var i = 0; i < daysInMonth; i++) {
			docForm.day.options[i] = new Option(i+1);
	}
	document.form1.day.options[0].selected = true;
}
-->
</script>

<script type="text/javasript">
	function Today(year,mon,day){
     if(year == "null" && mon == "null" && day == "null"){       
     today = new Date();
     this_year=today.getFullYear();
     this_month=today.getMonth();
     this_month+=1;
     if(this_month <10) this_month="0" + this_month;
 
     this_day=today.getDate();
     if(this_day<10) this_day="0" + this_day;     
 }
 else{  
     var this_year = eval(year);
     var this_month = eval(mon); 
     var this_day = eval(day);
     }
 
  montharray=new Array(31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31); 
  maxdays = montharray[this_month-1]; 
//아래는 윤달을 구하는 것
  if (this_month==2) { 
      if ((this_year/4)!=parseInt(this_year/4)) maxdays=28; 
      else maxdays=29; 
  } 
 
 document.writeln("<select name='year' size=1 onChange='dateSelect(this.form,this.form.month.selectedIndex);'>");
     for(i=this_year-5;i<this_year+6;i++){//현재 년도에서 과거로 5년까지 미래로 5년까지를 표시함
         if(i==this_year) document.writeln("<OPTION VALUE="+i+ " selected >" +i); 
         else document.writeln("<OPTION VALUE="+i+ ">" +i); 
     }    
 document.writeln("</select>년");      

 
 document.writeln("<select name='month' size=1 onChange='dateSelect(this.form,this.selectedIndex);'>");
     for(i=1;i<=12;i++){ 
         if(i<10){
             if(i==this_month) document.writeln("<OPTION VALUE=0" +i+ " selected >0"+i); 


             else document.writeln("<OPTION VALUE=0" +i+ ">0"+i);
         }         
         else{
             if(i==this_month) document.writeln("<OPTION VALUE=" +i+ " selected >" +i);  
             else document.writeln("<OPTION VALUE=" +i+ ">" +i);  
         }                     
    }         
 document.writeln("</select>월");
 
 document.writeln("<select name='day' size=1>");
     for(i=1;i<=maxdays;i++){ 
         if(i<10){
             if(i==this_day) document.writeln("<OPTION VALUE=0" +i+ " selected >0"+i); 
             else document.writeln("<OPTION VALUE=0" +i+ ">0"+i); 
         }
         
         else{
             if(i==this_day) document.writeln("<OPTION VALUE=" +i+ " selected } >"+i); 
             else document.writeln("<OPTION VALUE=" +i+ ">" +i);  
         }                     
    }         
 document.writeln("</select>일"); 
   
}
</script>

<style>
.content{width:730px; height:500px;}
#container {width: 90mm; height: 10mm;}
.container {height: 49mm; width: 90mm;}
.table {border:1px solid #E6E6E6; border-collapse:collapse; table-layout: fixed; text-align: center; margin: auto;}
.table td {border:1px solid #E6E6E6;text-align: center;font-weight: bolder;font-size: 15px;FONT-FAMILY: "맑은 고딕";color: #333333;word-break:break-all;}
.table tr {height: 40px;}
button {border: 3px solid #fff; border-radius: 5px; color: #white; display: block; font-size: 1.6em; font-weight: bold; margin: 1em auto; padding: 2em 6em;
		position: relative; text-transform: uppercase;}
button{background: #D8D8D8; color:#fff; border:none; position:relative; height:60px; font-size:1.6em; padding:0 2em; cursor:pointer; transition:800ms ease all; outline:none;}
button:hover{background:#fff; color: #D8D8D8;}
button:before,button:after{content:''; position:absolute; top:0; right:0; height:2px; width:0; background:  #D8D8D8; transition:400ms ease all;}
button:after{ right:inherit; top:inherit; left:0; bottom:0;}
button:hover:before,button:hover:after{ width:100%; transition:800ms ease all;}
.tr1{background-color: #A4A4A4;}
.tr2{background-color: #D8D8D8;}
input[type=text] {width: 300px;margin: 8px 0;box-sizing: border-box;}
</style>
</head>
<body>
    <form name="nse" action="add_db_nse.php" method="post">
			<table class="table" cellpadding="0" cellspacing="0" width="880" height="70%">
				<colgroup>
					<col style="width: 15%">
					<col style="width: 35%">
					<col style="width: 15%">
					<col style="width: 35%">
				</colgroup>
				<tr class="tr1">
					<td colspan=4 style="height:50px">기안서등록</td>
				</tr>
				<tr>
					<td class="tr2">문서번호</td>
					<td><input type="text" name="id"></td>
					<td class="tr2">기안일</td>
					<td>
					<input type="wdate" name="wdate">
					</td>
				</tr>
				<tr>
					<td class="tr2">구분</td>
					<td>
						<select name="type" id="customSelect" onchange="SetSelectBox();" style="width: 300px">
							<option selected>--문서구분--</option>
							<option value="기안서">기안서</option>
							<option value="구매요청서">구매요청서</option>
						</select>
					</td>
					<td class="tr2">관리부서</td>
					<td>
						<select name="depart" id="customSelect" onchange="SetSelectBox2();" style="width: 300px">
							<option selected>--관리부서--</option>
							<option value="생산관리팀">생산관리팀</option>
							<option value="영업관리팀">영업관리팀</option>
							<option value="품질팀">품질팀</option>
							<option value="임원실">임원실</option>
							<option value="인사팀">인사팀</option>
							<option value="경영지원팀">경영지원팀</option>
							<option value="기술개발연구소">개발기술연구소</option>
							<option value="홍보팀">홍보팀</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="tr2">기안자</td>
					<td>
						<select name="worker" id="customSelect" onchange="SetSelectBox3();" style="width: 300px">
							<option selected>--기안자--</option>
							<option value="John">John</option>
							<option value="Jack">Jack</option>
							<option value="Son">Son</option>
							<option value="Park">Park</option>
							<option value="Hwang">hwang</option>
						</select>
					</td>
					<td class="tr2"></td>
					<td></td>
				</tr>
				<tr>
					<td class="tr2">제목</td>
					<td colspan=3><input type="text" name="subject" style="width:740px;"></td>
				</tr>
				<tr>
					<td class="tr2">내용</td>
					<td colspan=3>
					<textarea name="ir1" id="ir1" class="content" ></textarea>
					<script type="text/javascript">
					var oEditors = [];
					nhn.husky.EZCreator.createInIFrame({
						oAppRef: oEditors,
						elPlaceHolder: "ir1",
						sSkinURI: "./se2/SmartEditor2Skin.html",
						fCreator: "createSEditor2"
					});
					function submitContents(elClickedObj) {
						// 에디터의 내용이 textarea에 적용
						oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);
						// 에디터의 내용에 대한 값 검증은 이곳에서 document.getElementById("ir1").value를 이용해서 처리하면 됩니다.
			 
						try {
							elClickedObj.form.submit();
						} catch(e) {}
						}
					</script>
				</td>
			</tr>
			<tr>
				<td colspan=4>
				<button type="submit" onclick="submitContents(this)"/>등록</button>
				</td>
			</tr>
		</table>
    </form>
</body>
</html>