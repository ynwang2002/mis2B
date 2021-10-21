<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>王雅妮簡介</title>
	<style type="text/css">
		* { 
			font-family: "標楷體"; }
		header { 
			font-size: 36px;
			color: #55ff55; }
		.col-lg-4 {
			border: 1px solid; }
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<script>
		$(document).ready(function(){
			$("#I").hover(function(){
				$("#PICTURE").attr("src","doremi.jpg");
			});

			$("#PU").hover(function(){
				$("#PICTURE").attr("src","pu.jpg");
			});

			$("#CSIM").hover(function(){
				$("#PICTURE").attr("src","csim.jpg");
			});

			$("#PICTURE").click(function(){
				$("#PICTURE").hide();
				$("#PICTURE").fadeIn("slow")
			});
		});
	</script>


</head>
<body>
	<nav class="navbar navbar-expand-md bg-primary navbar-dark">
	<a class="navbar-brand" href="#">MENU</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav">
			<li class="nav-item"><a class="nav-link" href="#aboutme">關於我</a></li>
			<li class="nav-item"><a class="nav-link" href="#bookmark">珍藏書籤</a></li>
			<li class="nav-item"><a class="nav-link" href="#youtube">推薦影片</a></li>
		</ul>
	</div>
	</nav>
	
	<main class="container-fluid bg-info text-white text-center">

		<nav>
			<h1><a href="http://www1.pu.edu.tw/~s1090350/1" class="text-reset text-decoration-none text-white bg-primary" target="_blank" id="I">王雅妮 (Ya-Ni Wang) </a></h1>
			<h2><a href="https://www.pu.edu.tw/" class="text-reset text-decoration-none text-white bg-primary" id="PU">靜宜大學</a>
			 / <a href="https://csim.pu.edu.tw/" class="text-reset text-decoration-none text-white bg-primary" id="CSIM">資訊管理學系</a></h2>
		</nav>

		<img src="fatcute.jpg" alt="照片" height="300" width="300" class="img-fluid rounded-circle" id="PICTURE"> 
		<br><br><br>

		<div class="row">
			<session id="aboutme" class="col-lg-4">
				<header>關於我</header>
				<h3>職稱：-----------</h3>
				<h3>經歷：-----------</h3>
				<h3>Tel:<a href="09xx-xxx-xxx" class="text-reset text-decoration-none text-white bg-info"> 09xx-xxx-xxx</a></h3>
				<h3>E-Mail:<a href="s1090350@gm.pu.edu.tw" class="text-reset text-decoration-none text-white bg-info">s1090350@gm.pu.edu.tw</a></h3>
			</session>
			<article id="bookmark" class="col-lg-4">
				<header>珍藏書籤</header> 
				<h3>生命中的每一剎時間</h3>
				<h3>都是向永恆借來的片羽</h3>
				<h3>胸襟中的每一縷柔情</h3>
				<h3>都是無限天機所流瀉的微光</h3>
			</article>
			
			<aside id="youtube" class="col-lg-4">
				<header>推薦影片</header>
				<div class="embed-responsive embed-responsive-16by9">
					<iframe src="https://www.youtube.com/embed/AhAJ6J01R7w"allowfullscreen class="embed-responsive-item">></iframe>
				</div>
			</aside>
		</div><br><br>
		
		<footer>
			Copyright © <?php echo date("Y-m-d") ?> 王雅妮. All Rights Reserved.
		</footer>
		
	</main>
</body>
</html>