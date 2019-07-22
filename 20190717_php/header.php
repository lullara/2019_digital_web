<!DOCTYPE html>
<html lang="ko">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta charset="UTF-8">
	<title>문서 제목</title>
	<style>
		*{padding: 0; margin: 0;}
		li{list-style: none;}
		.clearfix:after{content:"";display: block; clear:both;}
		#main_header{width: 1200px; height: 300px; margin: 0 auto; background-color: skyblue;position: relative;}
		#main_header h1{width: 100px; height: 100px; margin: 0 auto;
		background-color: #fff;text-align: center; line-height: 100px; }
		#main_header ul{width: 100%; position: absolute; bottom: 0;}
		#main_header ul li{float: left; width: 25%; height: 40px;line-height: 40px;text-align: center;}
		#main_header ul li:hover{background-color: red; }

		#main_content{width: 1200px; margin: 0 auto; }
		#main_content:after{content:"";clear:both; display: block;}
		#main_section{float: left; width: 890px; height: 1000px;background-color: pink;}

		#main_aside{float: right; width: 290px; height: 1000px; background-color: orange;}
		#main_footer{width: 1200px; height: 300px; margin: 0 auto; background-color: darkblue;}

		/*sub*/
		#sub01_content{width: 1200px; margin: 0 auto; }
		#sub01_content #sub_section{width: 100%; height: 2000px; background-color: gray;}
		
		#sub02_content{width: 1200px; margin: 0 auto; }
		#sub02_content #sub_section{width: 100%; height: 2000px; background-color: red;}

		#sub03_content{width: 1200px; margin: 0 auto; }
		#sub03_content #sub_section{width: 100%; height: 2000px; background-color: blue;}

		#sub04_content{width: 1200px; margin: 0 auto; }
		#sub04_content #sub_section{width: 100%; height: 2000px; background-color: green;}




	</style>
</head>
<body>
	<header id="main_header">
		<h1><a href="index.html">LOGO</a></h1>
		<ul class="clearfix">
			<li><a href="sub01.html">menu</a></li>
			<li><a href="sub02.html">menu</a></li>
			<li><a href="sub03.html">menu</a></li>
			<li><a href="sub04.html">menu</a></li>
			
		</ul>
	</header>
	