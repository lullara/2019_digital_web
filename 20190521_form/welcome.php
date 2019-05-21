<!DOCTYPE html>
<html lang="ko">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta charset="UTF-8">
	<title>문서 제목</title>
</head>
<body>
<? 
$name = $_GET["name"];
$id = $_GET["id"];

?>	

<div class="sun">
	이름 : <?echo $name; ?> <br>
	아이디 : <?echo $id; ?> <br>
 	패스워드 : <?echo $_GET["pw"]; ?><br>
</div>
</body>
</html>






